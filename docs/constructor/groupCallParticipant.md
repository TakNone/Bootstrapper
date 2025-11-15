# groupCallParticipant

**Description** : *Info about a group call participant*

**Layer** : 216

```tl
groupCallParticipant#eba636fe flags:# muted:flags.0?true left:flags.1?true can_self_unmute:flags.2?true just_joined:flags.4?true versioned:flags.5?true min:flags.8?true muted_by_you:flags.9?true volume_by_admin:flags.10?true self:flags.12?true video_joined:flags.15?true peer:Peer date:int active_date:flags.3?int source:int volume:flags.7?int about:flags.11?string raise_hand_rating:flags.13?long video:flags.6?GroupCallParticipantVideo presentation:flags.14?GroupCallParticipantVideo = GroupCallParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **muted** | [`flags.0?true`](type/true) | Whether the participant is muted |
| **left** | [`flags.1?true`](type/true) | Whether the participant has left |
| **can_self_unmute** | [`flags.2?true`](type/true) | Whether the participant can unmute themselves |
| **just_joined** | [`flags.4?true`](type/true) | Whether the participant has just joined |
| **versioned** | [`flags.5?true`](type/true) | If set, and updateGroupCallParticipants.version < locally stored call.version, info about this participant should be ignored. If (...), and updateGroupCallParticipants.version > call.version+1, the participant list should be refetched using phone.getGroupParticipants |
| **min** | [`flags.8?true`](type/true) | If not set, the volume and muted_by_you fields can be safely used to overwrite locally cached information; otherwise, volume will contain valid information only if volume_by_admin is set both in the cache and in the received constructor |
| **muted_by_you** | [`flags.9?true`](type/true) | Whether this participant was muted by the current user |
| **volume_by_admin** | [`flags.10?true`](type/true) | Whether our volume can only changed by an admin |
| **self** | [`flags.12?true`](type/true) | Whether this participant is the current user |
| **video_joined** | [`flags.15?true`](type/true) | Whether this participant is currently broadcasting video |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer information |
| <mark>date</mark> | [`int`](type/int) | When did this participant join the group call |
| **active_date** | [`flags.3?int`](type/int) | When was this participant last active in the group call |
| <mark>source</mark> | [`int`](type/int) | Source ID |
| **volume** | [`flags.7?int`](type/int) | Volume, if not set the volume is set to 100% |
| **about** | [`flags.11?string`](type/string) | Info about this participant |
| **raise_hand_rating** | [`flags.13?long`](type/long) | Specifies the UI visualization order of peers with raised hands: peers with a higher rating should be showed first in the list |
| **video** | [`flags.6?GroupCallParticipantVideo`](type/GroupCallParticipantVideo) | Info about the video stream the participant is currently broadcasting |
| **presentation** | [`flags.14?GroupCallParticipantVideo`](type/GroupCallParticipantVideo) | Info about the screen sharing stream the participant is currently broadcasting |

---

## Type

[GroupCallParticipant](type/GroupCallParticipant)

---

## Example

```php
$groupCallParticipant = $client->groupCallParticipant(
	muted : true,
	left : true,
	can_self_unmute : true,
	just_joined : true,
	versioned : true,
	min : true,
	muted_by_you : true,
	volume_by_admin : true,
	self : true,
	video_joined : true,
	peer : $client->peerUser(
		user_id : -6893154910295408951,
	),
	date : 77,
	active_date : 69,
	source : 9,
	volume : 46,
	about : '41xDTNSURdIz56Ey',
	raise_hand_rating : 8465566278802074306,
	video : $client->groupCallParticipantVideo(
		paused : true,
		endpoint : '7xb0kNyDi6Jnz5Qo',
		source_groups : array(
			$client->groupCallParticipantVideoSourceGroup(
				semantics : 'q41C3RnXsivdQEfL',
				sources : array(56),
			),
		),
		audio_source : 95,
	),
	presentation : $client->groupCallParticipantVideo(
		paused : true,
		endpoint : 'QZzDLWqMGt4rsJFT',
		source_groups : array(
			$client->groupCallParticipantVideoSourceGroup(
				semantics : 'uvw6o9BLWyxzIhXl',
				sources : array(23),
			),
		),
		audio_source : 29,
	),
);
```