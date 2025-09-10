# chatlists.chatlistUpdates

**Description** : *Updated information about a chat folder deep link &raquo;*

**Layer** : 214

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
			user_id : 2352122023259083534,
		),
		$client->peerChat(
			chat_id : 7694339178546939448,
		),
		$client->peerChannel(
			channel_id : -7242324259288884891,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7711965764240400805,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2555423961955388438,
			title : 'nZ3XdOyV85EMHgFm',
			photo : $client->chatPhotoEmpty(),
			participants_count : 60,
			date : 99,
			version : 56,
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
				until_date : 1,
			),
		),
		$client->chatForbidden(
			id : -1848762368576273721,
			title : 'cJBkFL2ESwAnDbly',
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
			id : -1506807596411228469,
			access_hash : -6696452477610067016,
			title : 'P7vEpymiFatwK1CR',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CQiFnAJW1pLDw8lm',
					reason : 'gz70U1YPsRHStVcN',
					text : 'g725CDITpc3ELNxm',
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
				until_date : 22,
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
			participants_count : 84,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 11,
			color : $client->peerColor(
				color : 75,
				background_emoji_id : 4711433173330879509,
			),
			profile_color : $client->peerColor(
				color : 58,
				background_emoji_id : -5691634403152825227,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 3,
			subscription_until_date : 44,
			bot_verification_icon : -4324429857699152615,
			send_paid_messages_stars : -7042428741123675407,
			linked_monoforum_id : -1620713374492000173,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -570194720268429226,
			access_hash : -8375753323113514491,
			title : 'wKAPgreiUjXMEW4t',
			until_date : 17,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8041888723778072831,
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
			id : -3474302835661179795,
			access_hash : -1937211064997026032,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 28,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PxgQ1B4hAXsvc2kt',
					reason : 'jfv5rqP7pDu9Agsx',
					text : '4ma8IVKPBRlY2AnH',
				),
			),
			bot_inline_placeholder : 'vy910pTkWbxgfjLH',
			lang_code : 'aAG7tkF3wXnpxi6u',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 70,
			color : $client->peerColor(
				color : 12,
				background_emoji_id : -8366170633778104533,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : 6761377038704057141,
			),
			bot_active_users : 7,
			bot_verification_icon : 8726875326695744231,
			send_paid_messages_stars : 7155439891577151227,
		),
	),
);
```