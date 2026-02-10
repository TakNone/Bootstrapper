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
			user_id : -5843716434720169738,
		),
		date : 60,
		active_date : 50,
		source : 13,
		volume : 65,
		about : 'qOM70eg63IuaftXU',
		raise_hand_rating : -4496226440499412514,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'OUt4iYul5VZq0e7Q',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'gde29ZJARkUhyNV0',
					sources : array(1),
				),
			),
			audio_source : 94,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'LNbSyTp12w4dhj3I',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'kcHRBQdU3Ow4MAL8',
					sources : array(64),
				),
			),
			audio_source : 14,
		),
		paid_stars_total : -5674793741442378128,
	),
);
```