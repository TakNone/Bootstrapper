# updateGroupCallParticipants

**Description** : *The participant list of a certain group call has changed*

**Layer** : 225

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
		id : 6361103715038878018,
		access_hash : -3531123493186578683,
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
				user_id : -6277843950637749764,
			),
			date : 36,
			active_date : 19,
			source : 45,
			volume : 64,
			about : 'zlLMERxYyK2VcWkr',
			raise_hand_rating : -7212770869771544886,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'MNAL3g0mnIZBQGJ6',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'kNphv0QiIqcCw3Fa',
						sources : array(94),
					),
				),
				audio_source : 26,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'Jf1Qcwsg3PXnyjv4',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : '1gHxJCYenFkLGP4K',
						sources : array(11),
					),
				),
				audio_source : 63,
			),
			paid_stars_total : -6756453176212641122,
		),
	),
	version : 67,
);
```