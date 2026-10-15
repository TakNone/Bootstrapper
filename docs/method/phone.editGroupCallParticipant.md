# phone.editGroupCallParticipant

**Description** : *Edit information about a participant of a non\-RTMP video chat/livestream or conference\. The raise\_hand field is only supported in video chats/livestreams, see here &raquo; for more info*

**Layer** : 229

```tl
phone.editGroupCallParticipant#a5273abf flags:# call:InputGroupCall participant:InputPeer muted:flags.0?Bool volume:flags.1?int raise_hand:flags.2?Bool video_stopped:flags.3?Bool video_paused:flags.4?Bool presentation_paused:flags.5?Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Non-RTMP video chat/livestream or conference |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | The group call participant (can also be the user itself) |
| **muted** | [`flags.0?Bool`](type/Bool) | Change the participant's mute state; allowing a forcibly muted participant to self-unmute does not immediately unmute them |
| **volume** | [`flags.1?int`](type/int) | New volume, between 1 and 20000; 10000 represents 100%. Without moderation rights, changing another participant's volume affects only local playback |
| **raise_hand** | [`flags.2?Bool`](type/Bool) | Raise or lower hand; only supported in video chats/livestreams |
| **video_stopped** | [`flags.3?Bool`](type/Bool) | Start or stop the current user's video stream |
| **video_paused** | [`flags.4?Bool`](type/Bool) | Pause or resume the current user's video stream |
| **presentation_paused** | [`flags.5?Bool`](type/Bool) | Pause or resume the current user's presentation stream |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_FORBIDDEN** | `403` | The specified group call cannot be used in this context |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **PARTICIPANT_JOIN_MISSING** | `400` | Trying to enable a presentation, when the user hasn't joined the Video Chat with phone.joinGroupCall |
| **RAISE_HAND_FORBIDDEN** | `400` | You cannot raise your hand |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |
| **USER_VOLUME_INVALID** | `400` | The specified user volume is invalid |
| **VIDEO_PAUSE_FORBIDDEN** | `400` | You cannot pause the video stream |
| **VIDEO_STOP_FORBIDDEN** | `400` | You cannot stop the video stream |

---

## Example

```php
$updates = $client->phone->editGroupCallParticipant(
	call : $client->inputGroupCall(
		id : 5732448177947014925,
		access_hash : 3285214085936060099,
	),
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
	muted : false,
	volume : 22,
	raise_hand : false,
	video_stopped : false,
	video_paused : false,
	presentation_paused : true,
);
```