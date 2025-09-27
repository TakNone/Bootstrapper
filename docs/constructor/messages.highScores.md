# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 214

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
			pos : 36,
			user_id : -8561598664688971269,
			score : 8,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8361425094026397979,
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
			id : -2166965134336276268,
			access_hash : -646179604440299044,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 73,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'g6puMI3rUevRcm90',
					reason : 'Na9QTM5ozd13YXmR',
					text : 'oZOPJKzcNE0LjAQ8',
				),
			),
			bot_inline_placeholder : 'BLfbtOlEN3IT7o6z',
			lang_code : 'fT8syRWrIJ6M3ecu',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 86,
			color : $client->peerColor(
				color : 11,
				background_emoji_id : 1940140881954808836,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : 5731288271331765256,
			),
			bot_active_users : 46,
			bot_verification_icon : 8471210556292111355,
			send_paid_messages_stars : 85746351508334925,
		),
	),
);
```