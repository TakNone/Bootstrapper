# channelAdminLogEventActionParticipantMute

**Description** : *A group call participant was muted*

**Layer** : 214

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
			user_id : 2561656078406763181,
		),
		date : 28,
		active_date : 9,
		source : 0,
		volume : 51,
		about : 'f31SgGApujeraY0h',
		raise_hand_rating : 4262354530673848717,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'U8Wu1ghFHXJVnaKe',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 24,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'cK3JByVzGeE5HxWU',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 37,
		),
	),
);
```