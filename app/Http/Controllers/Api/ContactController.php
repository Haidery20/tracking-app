<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;

class ContactController extends Controller
{
    /**
     * Send a contact message
     *
     * @param ContactRequest $request
     * @return JsonResponse
     */
    public function send(ContactRequest $request): JsonResponse
    {
        try {
            $message = ContactMessage::create($request->validated());

            Mail::to(config('mail.from.address'))
                ->send(new ContactMessageMail($message));

            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while sending your message. Please try again later.'
            ], 500);
        }
    }

    /**
     * Get all contact messages
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $messages = ContactMessage::latest()->paginate(10);
        return response()->json($messages);
    }

    /**
     * Get a specific contact message
     *
     * @param ContactMessage $message
     * @return JsonResponse
     */
    public function show(ContactMessage $message): JsonResponse
    {
        return response()->json($message);
    }

    /**
     * Update a contact message
     *
     * @param ContactMessage $message
     * @param array $data
     * @return JsonResponse
     */
    public function update(ContactMessage $message, array $data): JsonResponse
    {
        $message->update($data);
        return response()->json($message);
    }

    /**
     * Delete a contact message
     *
     * @param ContactMessage $message
     * @return JsonResponse
     */
    public function destroy(ContactMessage $message): JsonResponse
    {
        $message->delete();
        return response()->json(null, 204);
    }
}
