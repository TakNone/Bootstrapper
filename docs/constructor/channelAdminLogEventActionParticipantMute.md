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
			user_id : -2344524085356923546,
		),
		date : 2,
		active_date : 56,
		source : 1,
		volume : 9,
		about : 'dp6Zbqi2F9IWNr17',
		raise_hand_rating : 4008945260204728712,
		video : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'v3l2kKCoFDmbBNzp',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'YrFgyR04l68H9L1G',
					sources : array(18),
				),
			),
			audio_source : 89,
		),
		presentation : $client->groupCallParticipantVideo(
			paused : true,
			endpoint : 'ycMYXi37sCDfO4k2',
			source_groups : array(
				$client->groupCallParticipantVideoSourceGroup(
					semantics : 'MunWCKmidU1w3JZR',
					sources : array(40),
				),
			),
			audio_source : 26,
		),
		paid_stars_total : 2067498333346041008,
	),
);
```