# phone.editGroupCallParticipant

**Description** : *Edit information about a given group call participant*

**Layer** : 218

```tl
phone.editGroupCallParticipant#a5273abf flags:# call:InputGroupCall participant:InputPeer muted:flags.0?Bool volume:flags.1?int raise_hand:flags.2?Bool video_stopped:flags.3?Bool video_paused:flags.4?Bool presentation_paused:flags.5?Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The group call |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | The group call participant (can also be the user itself) |
| **muted** | [`flags.0?Bool`](type/Bool) | Whether to mute or unmute the specified participant |
| **volume** | [`flags.1?int`](type/int) | New volume |
| **raise_hand** | [`flags.2?Bool`](type/Bool) | Raise or lower hand |
| **video_stopped** | [`flags.3?Bool`](type/Bool) | Start or stop the video stream |
| **video_paused** | [`flags.4?Bool`](type/Bool) | Pause or resume the video stream |
| **presentation_paused** | [`flags.5?Bool`](type/Bool) | Pause or resume the screen sharing stream |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_FORBIDDEN** | `403` | The group call has already ended |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **PARTICIPANT_JOIN_MISSING** | `400` | Trying to enable a presentation, when the user hasn't joined the Video Chat with phone.joinGroupCall |
| **RAISE_HAND_FORBIDDEN** | `400` | You cannot raise your hand |
| **USER_VOLUME_INVALID** | `400` | The specified user volume is invalid |
| **VIDEO_PAUSE_FORBIDDEN** | `400` | You cannot pause the video stream |
| **VIDEO_STOP_FORBIDDEN** | `400` | You cannot stop the video stream |

---

## Example

```php
$updates = $client->phone->editGroupCallParticipant(
	call : $client->inputGroupCall(
		id : 4374344802511134662,
		access_hash : -6206847752219546433,
	),
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
	muted : false,
	volume : 46,
	raise_hand : true,
	video_stopped : true,
	video_paused : true,
	presentation_paused : true,
);
```