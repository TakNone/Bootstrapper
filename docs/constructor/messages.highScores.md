# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 218

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
			pos : 26,
			user_id : -2190174571021991168,
			score : 85,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2476270308845060262,
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
			id : 8849570211127499377,
			access_hash : -6015677530730039088,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hXukilwcWaP03Yzv',
					reason : '6c9luIkCrwH8Jsy3',
					text : 'L9eZEPYxiujsUzRo',
				),
			),
			bot_inline_placeholder : 'VlN9eM20LYFhHf1Z',
			lang_code : 'rw8qfVkdElRIOaPz',
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
				max_id : 77,
			),
			color : $client->peerColor(
				color : 99,
				background_emoji_id : 2934395768731837357,
			),
			profile_color : $client->peerColor(
				color : 35,
				background_emoji_id : 1677502772436242658,
			),
			bot_active_users : 73,
			bot_verification_icon : -923308839029259998,
			send_paid_messages_stars : 1394510188451817830,
		),
	),
);
```