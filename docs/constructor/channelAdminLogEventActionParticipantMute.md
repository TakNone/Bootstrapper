# channelAdminLogEventActionParticipantMute

**Description** : *A group call participant was muted*

**Layer** : 211

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
			user_id : 8456644578240823667,
		),
		date : 77,
		active_date : 99,
		source : 37,
		volume : 35,
		about : '0OVRG5eEwn71ZuUg',
		raise_hand_rating : -299611163284403210,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'uLQ6VXZGx2PRnBSc',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 55,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : '6LluiFwBNozg23Ga',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 83,
		),
	),
);
```