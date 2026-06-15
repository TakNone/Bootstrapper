# stories.storyViewsList

**Description** : *Reaction and view counters for a story*

**Layer** : 227

```tl
stories.storyViewsList#59d78fc5 flags:# count:int views_count:int forwards_count:int reactions_count:int views:Vector<StoryView> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = stories.StoryViewsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 44,
	views_count : 77,
	forwards_count : 44,
	reactions_count : 40,
	views : array(
		$client->storyView(
			blocked : true,
			blocked_my_stories_from : true,
			user_id : -3226240424988128770,
			date : 13,
			reaction : $client->reactionEmpty(),
		),
		$client->storyViewPublicForward(
			blocked : true,
			blocked_my_stories_from : true,
			message : $client->messageEmpty(
				id : 48,
				peer_id : $client->peerUser(
					user_id : -5900498989954584904,
				),
			),
		),
		$client->storyViewPublicRepost(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -700690418200479445,
			),
			story : $client->storyItemDeleted(
				id : 49,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -5506636861951012091,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4417558068330312428,
			title : 'LGIbOjezy7d5qQ9a',
			photo : $client->chatPhotoEmpty(),
			participants_count : 36,
			date : 97,
			version : 62,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 27,
			),
		),
		$client->chatForbidden(
			id : 8631333627548483929,
			title : 'gDPs0TGmRwdByiAl',
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
			id : -4048811900638860898,
			access_hash : 7091425902506012445,
			title : 'WP1RpVx8CNeLmGXI',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cfVJNMH7rKeI3v9R',
					reason : 'rE108HWxmM7wDscI',
					text : '1L2Y6EiTD4QBhzNv',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 23,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 5,
			),
			participants_count : 98,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 41,
			),
			color : $client->peerColor(
				color : 93,
				background_emoji_id : 5806322155678739570,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : 7063790914127095313,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 11,
			subscription_until_date : 25,
			bot_verification_icon : -8466435476617253345,
			send_paid_messages_stars : -2440186816224691458,
			linked_monoforum_id : -209341895921849902,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -5642354406010401832,
			access_hash : -1387795350447648613,
			title : 'UiZAqrmTPnDLpvSh',
			until_date : 48,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4337462040927406412,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 7844211800823483573,
			access_hash : 2195060377097913993,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Wv0gR6xz853rnQFD',
					reason : 'nMxIHtYJhplc2Xfs',
					text : 'jgzUfdDpB35RJsqP',
				),
			),
			bot_inline_placeholder : 'zeJLiYV3Tx69bCs5',
			lang_code : '4F8aTbG26K75MCoq',
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
				max_id : 11,
			),
			color : $client->peerColor(
				color : 9,
				background_emoji_id : -2037932265565487966,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : 229847984852316279,
			),
			bot_active_users : 9,
			bot_verification_icon : 9066814686655161241,
			send_paid_messages_stars : 8532184253689658943,
		),
	),
	next_offset : 'Q3tJbXTc2yR9kZd1',
);
```