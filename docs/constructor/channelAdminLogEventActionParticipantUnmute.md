# channelAdminLogEventActionParticipantUnmute

**Description** : *A group call participant was unmuted*

**Layer** : 222

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
			user_id : 5915320349963256234,
		),
		date : 43,
		active_date : 37,
		source : 11,
		volume : 17,
		about : 'RCWTOjYebUxkudVS',
		raise_hand_rating : 1807721063172623694,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'upjaQFBWc5IhqOLs',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'M4vonti2FTqVRBNe',
					sources : array(4),
				),
			),
			audio_source : 52,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'heJMVzYrWD7QvoIf',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'iaenMdNmf7wFT4E1',
					sources : array(19),
				),
			),
			audio_source : 81,
		),
		paid_stars_total : -2605202390574526830,
	),
);
```