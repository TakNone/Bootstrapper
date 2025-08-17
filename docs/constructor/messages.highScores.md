# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 211

```tl
messages.highScores#9a3bfd99 scores:Vector<HighScore> users:Vector<User> = messages.HighScores;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>scores</mark> | [`Vector<HighScore>`](type/HighScore) | Highscores |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users, associated to the highscores |

---

## Type

[messages.HighScores](type/messages.HighScores)

---

## Example

```php
$messagesHighScores = $client->messages->highScores(
	scores : array(
		$client->highScore(
			pos : 93,
			user_id : 7596280697446700125,
			score : 24,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4398296895873636942,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			id : 5045267238858488707,
			access_hash : 5978391016057147275,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'n0KSBTmLdtx7vq5c',
					reason : 'CuvNeEl9iQ7XYRGk',
					text : 'BVrMIgKfUeJtQDx9',
				),
			),
			bot_inline_placeholder : 'Jec7xp5soH26fw41',
			lang_code : 'zNd60g7sbvEDRMly',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 80,
			color : $client->peerColor(
				color : 41,
				background_emoji_id : 9173486846713935790,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : -5006542439270957727,
			),
			bot_active_users : 83,
			bot_verification_icon : 2296139557874154908,
			send_paid_messages_stars : -6577328726442608290,
		),
	),
);
```