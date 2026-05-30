# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 222

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
			views_count : 61,
			forwards_count : 5,
			reactions : array(
				$client->reactionCount(
					chosen_order : 59,
					reaction : $client->reactionEmpty(),
					count : 46,
				),
			),
			reactions_count : 100,
			recent_viewers : array(-3784020340036305312),
		),
	),
	users : array(
		$client->userEmpty(
			id : -6478387653827257113,
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
			id : 6747092993191085875,
			access_hash : 4243436023786307005,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tlqL6Xad5M4rYkev',
					reason : 'YyvlCpfSgt8A7ZkQ',
					text : 'WsTrR4YhFHSfMze3',
				),
			),
			bot_inline_placeholder : 'twnJsrfhjYxqmP0D',
			lang_code : 'TOYl9eCR465dqfbv',
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
				max_id : 76,
			),
			color : $client->peerColor(
				color : 4,
				background_emoji_id : -363808865935325342,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : 2586605695073725556,
			),
			bot_active_users : 0,
			bot_verification_icon : -5545627001829544279,
			send_paid_messages_stars : -8051036274365660349,
		),
	),
);
```