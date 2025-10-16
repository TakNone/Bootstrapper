# stories.storyReactionsList

**Description** : *List of peers that reacted to or intercated with a specific story*

**Layer** : 216

```tl
stories.storyReactionsList#aa5f789c flags:# count:int reactions:Vector<StoryReaction> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = stories.StoryReactionsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of reactions matching query |
| <mark>reactions</mark> | [`Vector<StoryReaction>`](type/StoryReaction) | List of peers that reacted to or interacted with a specific story |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| **next_offset** | [`flags.0?string`](type/string) | If set, indicates the next offset to use to load more results by invoking stories.getStoryReactionsList |

---

## Type

[stories.StoryReactionsList](type/stories.StoryReactionsList)

---

## Example

```php
$storiesStoryReactionsList = $client->stories->storyReactionsList(
	count : 44,
	reactions : array(
		$client->storyReaction(
			peer_id : $client->peerUser(
				user_id : -5396493467746365777,
			),
			date : 42,
			reaction : $client->reactionEmpty(),
		),
		$client->storyReactionPublicForward(
			message : $client->messageEmpty(
				id : 25,
				peer_id : $client->peerUser(...),
			),
		),
		$client->storyReactionPublicRepost(
			peer_id : $client->peerUser(
				user_id : 7452501838808063382,
			),
			story : $client->storyItemDeleted(
				id : 21,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3884062783440552211,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3581423105318900311,
			title : 'tdkgYja3vesXNhi9',
			photo : $client->chatPhotoEmpty(),
			participants_count : 82,
			date : 82,
			version : 97,
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
				until_date : 51,
			),
		),
		$client->chatForbidden(
			id : 8177811803925504287,
			title : 'zbGjZDyBatvgxqMo',
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
			id : 3687473291723923160,
			access_hash : -5619934395381039445,
			title : 'EXI9T3adOV40rtYg',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 35,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2bhIkRFeoOti6x0L',
					reason : 'EzN6Q1fr32RwVF9g',
					text : 'jCSPdYgAvW1zoENU',
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
				until_date : 16,
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
				until_date : 59,
			),
			participants_count : 89,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 88,
			color : $client->peerColor(
				color : 16,
				background_emoji_id : -2591001092782378391,
			),
			profile_color : $client->peerColor(
				color : 78,
				background_emoji_id : -345574171337027312,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 94,
			subscription_until_date : 2,
			bot_verification_icon : -5886985366427189439,
			send_paid_messages_stars : -4894616896232688716,
			linked_monoforum_id : 5294428517142725177,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 1462390527006463070,
			access_hash : -3619055827700101469,
			title : 'D9f5RnXFAPTtam7K',
			until_date : 60,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8924624890727860568,
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
			id : -9161921727157586994,
			access_hash : 7840080339753950169,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'D3Ctq8QFP7E54Xfz',
					reason : 'stOSIV9LPvw7J1nh',
					text : 'BKPO27LyMonASVJ0',
				),
			),
			bot_inline_placeholder : 'DgQjaWlUbZkVuJMN',
			lang_code : 'TcvWOfF8JsgnXmQk',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 43,
			color : $client->peerColor(
				color : 5,
				background_emoji_id : 5436653206925468889,
			),
			profile_color : $client->peerColor(
				color : 73,
				background_emoji_id : 7695055001920186545,
			),
			bot_active_users : 57,
			bot_verification_icon : 2683108508089492684,
			send_paid_messages_stars : 4078888505593978287,
		),
	),
	next_offset : 'qKAfg4HSPwYNBlUs',
);
```