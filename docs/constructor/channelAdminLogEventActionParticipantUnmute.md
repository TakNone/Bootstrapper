# channelAdminLogEventActionParticipantUnmute

**Description** : *A group call participant was unmuted*

**Layer** : 233

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
			user_id : -6499897578757315173,
		),
		date : 74,
		active_date : 94,
		source : 83,
		volume : 5,
		about : 'RI6sQm4L7l9FMaoB',
		raise_hand_rating : 3393538494188482957,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'WSy6lbdL9x8t71wk',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'EAQG5zKucRiJ0YMD',
					sources : array(24),
				),
			),
			audio_source : 40,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : '5P4mUygsfK6xCbJI',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'USMJcypDP0znfjvA',
					sources : array(19),
				),
			),
			audio_source : 91,
		),
		paid_stars_total : -4412873233648804490,
	),
);
```