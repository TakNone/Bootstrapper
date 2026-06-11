# channelAdminLogEventActionParticipantMute

**Description** : *A group call participant was muted*

**Layer** : 227

```tl
channelAdminLogEventActionParticipantMute#f92424d2 participant:GroupCallParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>participant</mark> | [`GroupCallParticipant`](type/GroupCallParticipant) | The participant that was muted |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantMute(
	participant : $client->groupCallParticipant(
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
			user_id : 6166915332184903130,
		),
		date : 15,
		active_date : 88,
		source : 56,
		volume : 93,
		about : 'PsLmauQ67HWGArFX',
		raise_hand_rating : 8704686337100407931,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : '5Dm4NUEzFPhI1RZl',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'LqWl8SI5ro2bcEig',
					sources : array(28),
				),
			),
			audio_source : 31,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'lj210SRp7EFHa9vw',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : '8FjHSkPmO0KihEyc',
					sources : array(79),
				),
			),
			audio_source : 41,
		),
		paid_stars_total : 6656998701477783175,
	),
);
```