# updateGroupCallParticipants

**Description** : *The participant list of a certain group call has changed*

**Layer** : 227

```tl
updateGroupCallParticipants#f2ebdb4e call:InputGroupCall participants:Vector<GroupCallParticipant> version:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call |
| <mark>participants</mark> | [`Vector<GroupCallParticipant>`](type/GroupCallParticipant) | New participant list |
| <mark>version</mark> | [`int`](type/int) | Version |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallParticipants(
	call : $client->inputGroupCall(
		id : 3036973356037529561,
		access_hash : -6897788795144347129,
	),
	participants : array(
		$client->groupCallParticipant(
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
				user_id : 5930899187924931173,
			),
			date : 4,
			active_date : 54,
			source : 15,
			volume : 8,
			about : 'RiJoEt3DC967aLpu',
			raise_hand_rating : -1714759727371851508,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'nMK3WXwFAVU0pbHS',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'B9L6eZTlC7r8khmX',
						sources : array(35),
					),
				),
				audio_source : 80,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'PiU5eBdHWFXypYm8',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'OoIGSCH4bZgK0DAh',
						sources : array(51),
					),
				),
				audio_source : 37,
			),
			paid_stars_total : 3313626490364827499,
		),
	),
	version : 16,
);
```