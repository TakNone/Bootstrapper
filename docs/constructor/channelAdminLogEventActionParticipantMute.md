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
			user_id : 118906444965752757,
		),
		date : 86,
		active_date : 46,
		source : 6,
		volume : 93,
		about : 'nUaxH9Th2vus7iEd',
		raise_hand_rating : 5430506696275825252,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'Bcmkwyl5qQGzeuPx',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 0,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'Ddzb60nJUHikEPL1',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 90,
		),
	),
);
```