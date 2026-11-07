# channelAdminLogEventActionParticipantMute

**Description** : *A group call participant was muted*

**Layer** : 233

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
			user_id : 352264274775371626,
		),
		date : 0,
		active_date : 88,
		source : 78,
		volume : 9,
		about : 'hQK1bvYXAGd0i2yI',
		raise_hand_rating : -6058482764318943266,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : '1Ts4MnYa2g6z70Cm',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'KeJdny1uVap42BTc',
					sources : array(91),
				),
			),
			audio_source : 70,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'eorqag1WnH0EtiA9',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : '0kUG9uoXBnqRIDZc',
					sources : array(79),
				),
			),
			audio_source : 99,
		),
		paid_stars_total : 2002274389332113742,
	),
);
```