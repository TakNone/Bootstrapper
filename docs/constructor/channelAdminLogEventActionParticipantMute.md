# channelAdminLogEventActionParticipantMute

**Description** : *A group call participant was muted*

**Layer** : 216

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
			user_id : -5103685701574616503,
		),
		date : 75,
		active_date : 47,
		source : 16,
		volume : 0,
		about : 'o5Lcdxyf08Dr7jNO',
		raise_hand_rating : 5795182262145368389,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'ot0zHDxKEvyC72sP',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 53,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'cLHlqhaUdbWXyEmM',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 60,
		),
	),
);
```