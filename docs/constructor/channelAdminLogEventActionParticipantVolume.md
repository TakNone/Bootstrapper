# channelAdminLogEventActionParticipantVolume

**Description** : *channelAdminLogEvent\.user\_id has set the volume of participant\.peer to participant\.volume*

**Layer** : 227

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
			user_id : 648686180848900297,
		),
		date : 85,
		active_date : 6,
		source : 0,
		volume : 1,
		about : 'mhF9aHDQrjtJg3nz',
		raise_hand_rating : 1856707610040539946,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'eTBycpja3hAiQg20',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'GqDFmNEAtj7sPHvQ',
					sources : array(92),
				),
			),
			audio_source : 14,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'q9BiZyxJkVH1vfF6',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'wShvidXj0TbmCYkp',
					sources : array(18),
				),
			),
			audio_source : 36,
		),
		paid_stars_total : -4012643625556362270,
	),
);
```