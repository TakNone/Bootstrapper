# channelAdminLogEventActionParticipantUnmute

**Description** : *A group call participant was unmuted*

**Layer** : 216

```tl
channelAdminLogEventActionParticipantUnmute#e64429c0 participant:GroupCallParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>participant</mark> | [`GroupCallParticipant`](type/GroupCallParticipant) | The participant that was unmuted |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantUnmute(
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
			user_id : -6325991938053144235,
		),
		date : 28,
		active_date : 92,
		source : 26,
		volume : 17,
		about : '3sY26HPaKUSACkri',
		raise_hand_rating : -8181131709433666850,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'l3tF5KXsf6YjJqRx',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 41,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'C2plcH1tOKiVArN0',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 35,
		),
	),
);
```