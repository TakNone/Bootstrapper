# channelAdminLogEventActionParticipantMute

**Description** : *A group call participant was muted*

**Layer** : 222

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
			user_id : 4338867937689389312,
		),
		date : 18,
		active_date : 86,
		source : 14,
		volume : 63,
		about : 'LnHjghzAsFwR3kci',
		raise_hand_rating : -736344704674246297,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'e2J9OpSbwjZ8Rzhl',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'up0NJdCGyh3etrEb',
					sources : array(57),
				),
			),
			audio_source : 78,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'eFuBWgE7DAK4Ud3R',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'bPq9r5aRuC1S3gOU',
					sources : array(80),
				),
			),
			audio_source : 60,
		),
		paid_stars_total : -363923783919776997,
	),
);
```