# chatlists.chatlistUpdates

**Description** : *Updated information about a chat folder deep link &raquo;*

**Layer** : 218

```tl
chatlists.chatlistUpdates#93bd878d missing_peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistUpdates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>missing_peers</mark> | [`Vector<Peer>`](type/Peer) | New peers to join |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistUpdates](type/chatlists.ChatlistUpdates)

---

## Example

```php
$chatlistsChatlistUpdates = $client->chatlists->chatlistUpdates(
	missing_peers : array(
		$client->peerUser(
			user_id : 669601900032443776,
		),
		$client->peerChat(
			chat_id : 6416117960044011501,
		),
		$client->peerChannel(
			channel_id : -2522970115715249016,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2015352391823619178,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7103315016519058521,
			title : 'hadGf8KsioXjr1Bb',
			photo : $client->chatPhotoEmpty(),
			participants_count : 6,
			date : 60,
			version : 34,
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
				until_date : 68,
			),
		),
		$client->chatForbidden(
			id : -7421766650359323794,
			title : '7akEVw68b3xICmXA',
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
			id : -8988010528787386802,
			access_hash : -4649545710257780500,
			title : 'Op1DvMklucNrQa5A',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mDZW6p9z2j38hkcE',
					reason : 'lecBvwTWtOHjx7qa',
					text : 'pXioHMktWwgFJVn6',
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
				until_date : 76,
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
				until_date : 61,
			),
			participants_count : 28,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 49,
			),
			color : $client->peerColor(
				color : 82,
				background_emoji_id : 7431002254476878155,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : 3521374166448055555,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 13,
			subscription_until_date : 53,
			bot_verification_icon : 5563446535533999423,
			send_paid_messages_stars : -4649212286303098637,
			linked_monoforum_id : 9207584815451209730,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6313225834928114517,
			access_hash : -4084239284217101933,
			title : 'SRgQ1jtMZdnXr2KH',
			until_date : 24,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8015810197208950634,
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
			id : -2559953581421192169,
			access_hash : 1164916450824251238,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jKvStP0XOBFUh69u',
					reason : 'WJok5pvXUSQ6ZiNG',
					text : '9jvi1MH2VzgRLquP',
				),
			),
			bot_inline_placeholder : 'dwGzs0TX3nRUDiLS',
			lang_code : '6LRD7HEKuIQhSel2',
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
				max_id : 84,
			),
			color : $client->peerColor(
				color : 99,
				background_emoji_id : -5404787814519124338,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : 6015934407592773660,
			),
			bot_active_users : 35,
			bot_verification_icon : -5797316203238969441,
			send_paid_messages_stars : -8771509574233912820,
		),
	),
);
```