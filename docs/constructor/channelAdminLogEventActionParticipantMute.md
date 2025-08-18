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
			user_id : -3617551272678736254,
		),
		date : 12,
		active_date : 100,
		source : 70,
		volume : 38,
		about : 'MSqeGc7XEkL1O0mi',
		raise_hand_rating : -5630282139479854498,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'CKioS6TxPmQcO27N',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 80,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : '6BSXEzKo0g54Lfhd',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 20,
		),
	),
);
```