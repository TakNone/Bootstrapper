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
			pos : 63,
			user_id : -6569386327444645840,
			score : 21,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3549887018287665370,
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
			id : -7182122503397289070,
			access_hash : 1182496649797924705,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Q9wlU7okME8spnWL',
					reason : 'q6tYFTH8SNi9sPfm',
					text : 'Z9Opgk3ViRTNhFYQ',
				),
			),
			bot_inline_placeholder : 'AR1YVI4Tt6baQC0p',
			lang_code : 'Wy9mHGk7jhdoBFZf',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 85,
			color : $client->peerColor(
				color : 15,
				background_emoji_id : 1241983187781951066,
			),
			profile_color : $client->peerColor(
				color : 10,
				background_emoji_id : -3826097298409071321,
			),
			bot_active_users : 9,
			bot_verification_icon : 6511004713175265935,
			send_paid_messages_stars : -844870968021935850,
		),
	),
);
```