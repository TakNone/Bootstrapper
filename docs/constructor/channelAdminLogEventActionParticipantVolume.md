# channelAdminLogEventActionParticipantVolume

**Description** : *channelAdminLogEvent.user_id has set the volume of participant.peer to participant.volume*

**Layer** : 211

```tl
channelAdminLogEventActionParticipantVolume#3e7f6847 participant:GroupCallParticipant = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>participant</mark> | [`GroupCallParticipant`](type/GroupCallParticipant) | The participant whose volume was changed |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionParticipantVolume(
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
			user_id : -5886229240218316873,
		),
		date : 76,
		active_date : 90,
		source : 14,
		volume : 43,
		about : 'j1iYZKc90RVOwzn5',
		raise_hand_rating : 4130434968366852832,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'R3U1pNfVGO8gZQ6Y',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 68,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : '2a9SCjlARfmXUkiy',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 18,
		),
	),
);
```