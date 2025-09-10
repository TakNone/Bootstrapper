# updateGroupCallParticipants

**Description** : *The participant list of a certain group call has changed*

**Layer** : 214

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
		id : -461016960890653090,
		access_hash : -7177798652024570776,
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
				user_id : -2147342942242065726,
			),
			date : 46,
			active_date : 36,
			source : 83,
			volume : 6,
			about : 'XbTJwHZeONmkVAlD',
			raise_hand_rating : 7652686528065294687,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'q1IM2knhyGpLzHBe',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 19,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'GoWMlHsvzyuxmLdT',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 20,
			),
		),
	),
	version : 45,
);
```