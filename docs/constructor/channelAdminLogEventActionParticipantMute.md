# channelAdminLogEventActionParticipantMute

**Description** : *A group call participant was muted*

**Layer** : 218

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
			user_id : 4049361432856649060,
		),
		date : 7,
		active_date : 70,
		source : 37,
		volume : 27,
		about : 'pkHXS1lmjasTFe8U',
		raise_hand_rating : -4703662495855897945,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'VZYPTu6iopW7Cq2E',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'aOkrveDL7ntVdAC5',
					sources : array(90),
				),
			),
			audio_source : 15,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'pTh1DMZgQAeojKGV',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'VDEuPUHF06h9RT1p',
					sources : array(75),
				),
			),
			audio_source : 55,
		),
		paid_stars_total : -6630778982410315885,
	),
);
```