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
			user_id : 4528594155655863795,
		),
		date : 74,
		active_date : 2,
		source : 0,
		volume : 34,
		about : 'D30WopNhwXCvmrBR',
		raise_hand_rating : -6143690918974825993,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'I5vxFy9nRLWq8upr',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'QOk8L3qSNGd6e0z1',
					sources : array(18),
				),
			),
			audio_source : 18,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'INrc62YHjvylCMs4',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'RzmCdO1rKf6uSeT5',
					sources : array(11),
				),
			),
			audio_source : 33,
		),
		paid_stars_total : 7079466840682851045,
	),
);
```