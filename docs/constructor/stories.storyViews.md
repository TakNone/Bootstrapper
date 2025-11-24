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
			views_count : 33,
			forwards_count : 80,
			reactions : array(
				$client->reactionCount(
					chosen_order : 94,
					reaction : $client->reactionEmpty(),
					count : 15,
				),
			),
			reactions_count : 7,
			recent_viewers : array(6935301993955551092),
		),
	),
	users : array(
		$client->userEmpty(
			id : 6856240782385723539,
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
			id : -7297423254146029617,
			access_hash : 7900847443812182575,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pxsrIzamVDFMfT26',
					reason : 'J470pGmPXkKUeS9z',
					text : 'lGAKC4Z91idhToDU',
				),
			),
			bot_inline_placeholder : 'Uj9Tl50OhqtXFgrm',
			lang_code : 'MSl1uQ6ZynOYTsia',
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
				max_id : 75,
			),
			color : $client->peerColor(
				color : 4,
				background_emoji_id : -9184431083653929989,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : 8882524218178543744,
			),
			bot_active_users : 70,
			bot_verification_icon : 8815623123438690474,
			send_paid_messages_stars : 7178289061016885072,
		),
	),
);
```