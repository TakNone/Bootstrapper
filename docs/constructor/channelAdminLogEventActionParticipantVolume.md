# channelAdminLogEventActionParticipantVolume

**Description** : *channelAdminLogEvent\.user\_id has set the volume of participant\.peer to participant\.volume*

**Layer** : 233

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
			user_id : -8523893574075322216,
		),
		date : 54,
		active_date : 59,
		source : 32,
		volume : 64,
		about : '2wK1sndfVA6guHNF',
		raise_hand_rating : -2733190884519356860,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : '12yx5iwazdk9g6ec',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'XOhTzR26dSM41wEP',
					sources : array(3),
				),
			),
			audio_source : 3,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : '97YrgZWnIcGwUPpF',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'XsERM8hFZAvtOaVq',
					sources : array(43),
				),
			),
			audio_source : 60,
		),
		paid_stars_total : 3870425518696105714,
	),
);
```