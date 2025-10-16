# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 216

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
			pos : 3,
			user_id : -7391977178597146306,
			score : 80,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5362549005937678121,
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
			bot_forum_view : true,
			id : -812729167407105437,
			access_hash : 930099482865054077,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lGWOeTK9y6rE1fZ7',
					reason : 'gLTadk1EO7BpPNlb',
					text : 'JqsUj69eYCIg3Sci',
				),
			),
			bot_inline_placeholder : 'Iwvb1pQXoAk08eU5',
			lang_code : 'aZvxS2HQU1RTXNyM',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 17,
			color : $client->peerColor(
				color : 45,
				background_emoji_id : 7111954669325084234,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : 5328079894845213299,
			),
			bot_active_users : 30,
			bot_verification_icon : 1784273523504256852,
			send_paid_messages_stars : -4942095359875839861,
		),
	),
);
```