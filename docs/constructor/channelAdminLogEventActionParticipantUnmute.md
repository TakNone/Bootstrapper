# channelAdminLogEventActionParticipantUnmute

**Description** : *A group call participant was unmuted*

**Layer** : 218

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
			user_id : -1557470433071378492,
		),
		date : 28,
		active_date : 46,
		source : 60,
		volume : 88,
		about : 'nrpu3WQxOL6HBP0h',
		raise_hand_rating : -6242085872681241321,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : '21yg5xo8QUwmjMzk',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'jbfXLJdaBOswvPHt',
					sources : array(76),
				),
			),
			audio_source : 98,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'sfXLjvu1gx5IdkFy',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'UKSTegBOqLZ0xtb7',
					sources : array(63),
				),
			),
			audio_source : 88,
		),
		paid_stars_total : 7516789548164621111,
	),
);
```