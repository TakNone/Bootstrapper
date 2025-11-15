# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 218

```tl
stories.storyViews#de9eed1d views:Vector<StoryViews> users:Vector<User> = stories.StoryViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>views</mark> | [`Vector<StoryViews>`](type/StoryViews) | View date and reaction information of multiple stories |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.StoryViews](type/stories.StoryViews)

---

## Example

```php
$storiesStoryViews = $client->stories->storyViews(
	views : array(
		$client->storyViews(
			has_viewers : true,
			views_count : 26,
			forwards_count : 83,
			reactions : array(
				$client->reactionCount(
					chosen_order : 18,
					reaction : $client->reactionEmpty(),
					count : 57,
				),
			),
			reactions_count : 13,
			recent_viewers : array(-7547373951363037324),
		),
	),
	users : array(
		$client->userEmpty(
			id : -7303464000924666053,
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
			id : 8854613466879869778,
			access_hash : 8356150998026253812,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'zINcVqPvwl295Opd',
					reason : '6qDwhKFLj1PCxyU8',
					text : 'JAFioIDpwPv5gfRe',
				),
			),
			bot_inline_placeholder : 'PzIABwdrF0CxuhoO',
			lang_code : 'k3wGKECtQWpYny1c',
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
				max_id : 5,
			),
			color : $client->peerColor(
				color : 24,
				background_emoji_id : -7177489944118193024,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : -2888224384650646455,
			),
			bot_active_users : 91,
			bot_verification_icon : -5914296160664812844,
			send_paid_messages_stars : 2380521972444125167,
		),
	),
);
```