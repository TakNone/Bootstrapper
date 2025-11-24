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
			pos : 56,
			user_id : 3212803069162221900,
			score : 60,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6598190512594504855,
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
			id : 1844349658707229467,
			access_hash : -4867253570793843712,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'w5g8SORxYD04KZIP',
					reason : '4S75laCI8PsK3rR0',
					text : 'wzv7aBKH25o8xhTg',
				),
			),
			bot_inline_placeholder : 'z63QSxHpmRdn80ti',
			lang_code : 'dXWDoTew23ryG7t8',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 62,
				background_emoji_id : 1857382202727737491,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : 4288933024753140465,
			),
			bot_active_users : 44,
			bot_verification_icon : -2975978197592500296,
			send_paid_messages_stars : 3405022240822808391,
		),
	),
);
```