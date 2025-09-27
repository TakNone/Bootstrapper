# stories.storyViewsList

**Description** : *Reaction and view counters for a story*

**Layer** : 214

```tl
stories.storyViewsList#59d78fc5 flags:# count:int views_count:int forwards_count:int reactions_count:int views:Vector<StoryView> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = stories.StoryViewsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results that can be fetched |
| <mark>views_count</mark> | [`int`](type/int) | Total number of story views |
| <mark>forwards_count</mark> | [`int`](type/int) | Total number of story forwards/reposts |
| <mark>reactions_count</mark> | [`int`](type/int) | Number of reactions that were added to the story |
| <mark>views</mark> | [`Vector<StoryView>`](type/StoryView) | Story view date and reaction information |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| **next_offset** | [`flags.0?string`](type/string) | Offset for pagination |

---

## Type

[stories.StoryViewsList](type/stories.StoryViewsList)

---

## Example

```php
$storiesStoryViewsList = $client->stories->storyViewsList(
	count : 46,
	views_count : 18,
	forwards_count : 12,
	reactions_count : 49,
	views : array(
		$client->storyView(
			blocked : true,
			blocked_my_stories_from : true,
			user_id : -8817330996947894374,
			date : 62,
			reaction : $client->reactionEmpty(),
		),
		$client->storyViewPublicForward(
			blocked : true,
			blocked_my_stories_from : true,
			message : $client->messageEmpty(
				id : 25,
				peer_id : $client->peerUser(...),
			),
		),
		$client->storyViewPublicRepost(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 6874471627880657229,
			),
			story : $client->storyItemDeleted(
				id : 80,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2672324463958263091,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4969278397883508156,
			title : 'flv2XBGeLWTJy7KS',
			photo : $client->chatPhotoEmpty(),
			participants_count : 13,
			date : 31,
			version : 53,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 74,
			),
		),
		$client->chatForbidden(
			id : 7549528375193837263,
			title : 'hW2jyV8cH7iQgMDE',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -2499769884254190717,
			access_hash : 7591094302827501787,
			title : '6PEGHXn9U2vrTyWI',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 38,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IGBWOrp32aMyZ6CL',
					reason : '2dNY6ormX1G8eUBR',
					text : '2JNXBYGVaeb9y71m',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 94,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 66,
			),
			participants_count : 83,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 24,
			color : $client->peerColor(
				color : 80,
				background_emoji_id : 373375849360442925,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : -5836944349966397827,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 54,
			subscription_until_date : 69,
			bot_verification_icon : 1668086405849801641,
			send_paid_messages_stars : 2267965030250605651,
			linked_monoforum_id : -7091060701618984879,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1705225638202763635,
			access_hash : 7910358207431607202,
			title : '6SnzKTjMgP9rhmob',
			until_date : 77,
		),
	),
	users : array(
		$client->userEmpty(
			id : -123675729671426090,
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
			id : 593152802968044280,
			access_hash : -1395027781095137434,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 2,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NdSX3PiuJwmHt2Wc',
					reason : 'i0hcenGCoYwHZQLI',
					text : 'PuNxlFgILDvbVztG',
				),
			),
			bot_inline_placeholder : '3HL4tGe1djQwIrio',
			lang_code : 'T8lyihg4Dt9BHzEq',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 78,
			color : $client->peerColor(
				color : 18,
				background_emoji_id : 3804976181593264384,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : 6864295441887459902,
			),
			bot_active_users : 62,
			bot_verification_icon : -7544299490565548808,
			send_paid_messages_stars : -3119286094837744888,
		),
	),
	next_offset : 'ofBIk40Vvuqalj95',
);
```