# channelAdminLogEventActionParticipantVolume

**Description** : *channelAdminLogEvent\.user\_id has set the volume of participant\.peer to participant\.volume*

**Layer** : 216

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
			user_id : -3118557738777526242,
		),
		date : 73,
		active_date : 73,
		source : 93,
		volume : 21,
		about : 'RP2hVGJtNTsYISd3',
		raise_hand_rating : -7639899679449448363,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'rxofCASHcL9u6amM',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 98,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'FuZRkDrCQ0eyKz8H',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(...),
			),
			audio_source : 17,
		),
	),
);
```