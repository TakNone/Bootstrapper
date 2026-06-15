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
		id : 8081638728196743938,
		access_hash : -1329394044576922779,
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
				user_id : 7202997769163834225,
			),
			date : 34,
			active_date : 79,
			source : 25,
			volume : 33,
			about : 'BvuCV0P5RFrOW3mz',
			raise_hand_rating : -258683569353678176,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'zRFtNbwlYo89Bfy5',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'rEYWTqhaIJdSwsZl',
						sources : array(88),
					),
				),
				audio_source : 5,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'yLglAHzhOGDXCaxe',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'TJ2vfE4bN8WLaXxV',
						sources : array(3),
					),
				),
				audio_source : 21,
			),
			paid_stars_total : 8503018821118391963,
		),
	),
	version : 82,
);
```