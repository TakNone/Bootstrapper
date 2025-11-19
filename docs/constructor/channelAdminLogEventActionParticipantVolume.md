# channelAdminLogEventActionParticipantVolume

**Description** : *channelAdminLogEvent\.user\_id has set the volume of participant\.peer to participant\.volume*

**Layer** : 218

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
			user_id : 8100937513699889742,
		),
		date : 73,
		active_date : 81,
		source : 26,
		volume : 55,
		about : 'hjvWNZ64gmPzuD7i',
		raise_hand_rating : -3911970024890150757,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'VQlc5sbDdGe3mnAp',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'sNmQLc8AViJb4jOS',
					sources : array(8),
				),
			),
			audio_source : 72,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'XcVtnrJ3kpURfEhm',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'vHi0Aade3XK5R8E1',
					sources : array(34),
				),
			),
			audio_source : 8,
		),
		paid_stars_total : 3007376472103447134,
	),
);
```