# channelAdminLogEventActionParticipantUnmute

**Description** : *A group call participant was unmuted*

**Layer** : 227

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
			user_id : 6160103464871824532,
		),
		date : 65,
		active_date : 22,
		source : 40,
		volume : 46,
		about : '0PAxGzhfNQUWi9ev',
		raise_hand_rating : 773293279225376150,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'zIdTH0ciO6KF5wQ7',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : '2q38GtE1pJYBTuok',
					sources : array(41),
				),
			),
			audio_source : 40,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'Q786qrkzJ9cDP2gB',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : '0h4dL5qYecU2C1pw',
					sources : array(36),
				),
			),
			audio_source : 77,
		),
		paid_stars_total : -9028950323683870115,
	),
);
```