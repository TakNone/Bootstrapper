# updateGroupCallParticipants

**Description** : *The participant list of a certain group call has changed*

**Layer** : 218

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
		id : 8098457146399555252,
		access_hash : 5382520782830169433,
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
				user_id : -5404677047268797089,
			),
			date : 0,
			active_date : 89,
			source : 25,
			volume : 96,
			about : 'dwK7U0vaQrnzqpH5',
			raise_hand_rating : -7952509060303887696,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : '1UsCgnYe0McGruTS',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'gJ43Dhw59dkrcviu',
						sources : array(63),
					),
				),
				audio_source : 11,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'oFuUzrS5MJ1LDCfa',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'Iyhwr4fWJHxdNBcX',
						sources : array(91),
					),
				),
				audio_source : 50,
			),
			paid_stars_total : 3441035807561233873,
		),
	),
	version : 74,
);
```