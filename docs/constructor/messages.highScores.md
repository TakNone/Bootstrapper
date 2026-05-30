# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 222

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
			pos : 52,
			user_id : -2308923103802548968,
			score : 44,
		),
	),
	users : array(
		$client->userEmpty(
			id : 347602545327212114,
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
			bot_forum_can_manage_topics : true,
			id : 6314422239123072518,
			access_hash : -22828161904564601,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LdrBp7bYo3hMKyWF',
					reason : '6g73DfiEOBjdubln',
					text : 'wbPANJznCsfUcRX3',
				),
			),
			bot_inline_placeholder : '68OKiEIG7agnqZ2N',
			lang_code : 'hdpybtGAsXo5jHWl',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 36,
			),
			color : $client->peerColor(
				color : 55,
				background_emoji_id : -1945319752853322752,
			),
			profile_color : $client->peerColor(
				color : 60,
				background_emoji_id : -7107136184107463196,
			),
			bot_active_users : 2,
			bot_verification_icon : 2106804039735636387,
			send_paid_messages_stars : -1399000235264311971,
		),
	),
);
```