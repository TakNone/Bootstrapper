# updateGroupCallParticipants

**Description** : *The participant list of a certain group call has changed*

**Layer** : 222

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
		id : -6889075015213104621,
		access_hash : -5317643541853776723,
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
				user_id : 8731900626553073696,
			),
			date : 7,
			active_date : 25,
			source : 49,
			volume : 42,
			about : 'AGwR4Umity7I0Ynu',
			raise_hand_rating : -570883551482074642,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'GN14ZfDc7lPSQC9t',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'LzGPhYmlHy3j2xvt',
						sources : array(70),
					),
				),
				audio_source : 48,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : '98LFHSdplCc5xbwN',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'CnqiO3WzQjJwE1bu',
						sources : array(93),
					),
				),
				audio_source : 54,
			),
			paid_stars_total : -5799222694339741633,
		),
	),
	version : 37,
);
```