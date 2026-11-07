# groupCallParticipant

**Description** : *Describes a group call participant and their current state, see applying group call updates &raquo;*

**Layer** : 233

```tl
groupCallParticipant#2a3dc7ac flags:# muted:flags.0?true left:flags.1?true can_self_unmute:flags.2?true just_joined:flags.4?true versioned:flags.5?true min:flags.8?true muted_by_you:flags.9?true volume_by_admin:flags.10?true self:flags.12?true video_joined:flags.15?true peer:Peer date:int active_date:flags.3?int source:int volume:flags.7?int about:flags.11?string raise_hand_rating:flags.13?long video:flags.6?GroupCallParticipantVideo presentation:flags.14?GroupCallParticipantVideo paid_stars_total:flags.16?long = GroupCallParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **muted** | [`flags.0?true`](type/true) | Whether the participant is muted |
| **left** | [`flags.1?true`](type/true) | Whether the participant left the media layer; in conferences, another participant must then prune them from the E2E blockchain |
| **can_self_unmute** | [`flags.2?true`](type/true) | Whether the participant can unmute themselves |
| **just_joined** | [`flags.4?true`](type/true) | Whether the participant has just joined |
| **versioned** | [`flags.5?true`](type/true) | If set, the application logic for this update is slightly different, see here » for more info on the full flow |
| **min** | [`flags.8?true`](type/true) | If not set, the volume and muted_by_you fields can be safely used to overwrite locally cached information; otherwise, volume will contain valid information only if volume_by_admin is set both in the cache and in the received constructor |
| **muted_by_you** | [`flags.9?true`](type/true) | Whether this participant was muted by the current user |
| **volume_by_admin** | [`flags.10?true`](type/true) | Whether our volume can only changed by an admin |
| **self** | [`flags.12?true`](type/true) | Whether this participant is the current user |
| **video_joined** | [`flags.15?true`](type/true) | Whether this participant is currently broadcasting video |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer represented by this participant |
| <mark>date</mark> | [`int`](type/int) | When did this participant join the group call |
| **active_date** | [`flags.3?int`](type/int) | When was this participant last active in the group call |
| <mark>source</mark> | [`int`](type/int) | Source ID of the participant's main audio stream |
| **volume** | [`flags.7?int`](type/int) | Volume, between 1 and 20000; 10000 represents 100% volume. If not set, the volume is set to 100% |
| **about** | [`flags.11?string`](type/string) | Info about this participant |
| **raise_hand_rating** | [`flags.13?long`](type/long) | Specifies the UI visualization order of peers with raised hands: peers with a higher rating should be showed first in the list |
| **video** | [`flags.6?GroupCallParticipantVideo`](type/GroupCallParticipantVideo) | Info about the video stream the participant is currently broadcasting |
| **presentation** | [`flags.14?GroupCallParticipantVideo`](type/GroupCallParticipantVideo) | Info about the screen sharing stream the participant is currently broadcasting |
| **paid_stars_total** | [`flags.16?long`](type/long) | Total Stars donated by this participant in a live story |

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
		user_id : -8544551338581455854,
	),
	date : 5,
	active_date : 23,
	source : 79,
	volume : 33,
	about : 'psSzd7RJvrqQoVIH',
	raise_hand_rating : -4587265705334793109,
	video : $client->groupCallParticipantVideo(
		paused : true,
		endpoint : 'svqrkUa4O96QX3cf',
		source_groups : array(
			$client->groupCallParticipantVideoSourceGroup(
				semantics : 'cEO62G5qFsRZ7hDv',
				sources : array(79),
			),
		),
		audio_source : 69,
	),
	presentation : $client->groupCallParticipantVideo(
		paused : true,
		endpoint : 'u5H2ctRdATPUsKDW',
		source_groups : array(
			$client->groupCallParticipantVideoSourceGroup(
				semantics : 'zRyADZB7dgr0YkWb',
				sources : array(62),
			),
		),
		audio_source : 84,
	),
	paid_stars_total : -1519393479087079404,
);
```