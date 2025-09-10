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
			pos : 48,
			user_id : -9017493753907811223,
			score : 90,
		),
	),
	users : array(
		$client->userEmpty(
			id : -27792527165619798,
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
			id : 6488712141446376200,
			access_hash : -3452147423885649338,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 58,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ZPqaF2HRMlysbtrW',
					reason : '4TofRAkgLmOUa9uw',
					text : '5JSkOtqiT4uUxMEa',
				),
			),
			bot_inline_placeholder : 'GxZkItb4mO28JE5h',
			lang_code : '6vToQtIdJuazK1GO',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 71,
			color : $client->peerColor(
				color : 83,
				background_emoji_id : -1284580253273495658,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : 8689197849903049394,
			),
			bot_active_users : 84,
			bot_verification_icon : 3921758568612412008,
			send_paid_messages_stars : 4092285384153506284,
		),
	),
);
```