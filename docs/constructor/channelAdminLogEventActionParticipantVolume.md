# channelAdminLogEventActionParticipantVolume

**Description** : *channelAdminLogEvent\.user\_id has set the volume of participant\.peer to participant\.volume*

**Layer** : 229

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
			user_id : -3586196079987457164,
		),
		date : 66,
		active_date : 80,
		source : 9,
		volume : 5,
		about : 'kbE807fZPocIrLuX',
		raise_hand_rating : -6341486602918849385,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'rH3EhPuSpgiZaBtT',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'rKFlMIq8djOpYECm',
					sources : array(29),
				),
			),
			audio_source : 71,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'SpYATKoiGn2xgyfd',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'EkB7iSqMOyNz9UG4',
					sources : array(7),
				),
			),
			audio_source : 81,
		),
		paid_stars_total : -5739940763121775531,
	),
);
```