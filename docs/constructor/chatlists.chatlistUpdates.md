# chatlists.chatlistUpdates

**Description** : *Updated information about a chat folder deep link &raquo;*

**Layer** : 216

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
			user_id : 8871427377458069410,
		),
		$client->peerChat(
			chat_id : 5939694094682189137,
		),
		$client->peerChannel(
			channel_id : 5219016733052866257,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -852373748894086096,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4243026184134065761,
			title : 'WLzwE0FINDUuvVjH',
			photo : $client->chatPhotoEmpty(),
			participants_count : 20,
			date : 2,
			version : 6,
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
				until_date : 100,
			),
		),
		$client->chatForbidden(
			id : -1048604257664489739,
			title : 'WUiY8XIcxECRzVJ0',
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
			id : 6629285856943589280,
			access_hash : -3134920392225011049,
			title : 'fFMP1EAv0K7LNO6C',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 37,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2XOeZQxisUt3c8Fr',
					reason : '2U5wExXdBpF4mIyi',
					text : 'BhzTtSdHpnb18r7U',
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
				until_date : 53,
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
				until_date : 17,
			),
			participants_count : 63,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 17,
			color : $client->peerColor(
				color : 69,
				background_emoji_id : 4311194454650230262,
			),
			profile_color : $client->peerColor(
				color : 58,
				background_emoji_id : 4729695115635652767,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 0,
			subscription_until_date : 54,
			bot_verification_icon : 6889449084118924953,
			send_paid_messages_stars : 7289206412329337282,
			linked_monoforum_id : -1770536858205268014,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2850705944954471002,
			access_hash : 3044942103156176351,
			title : 'H05FKpQm4OeCd7cj',
			until_date : 4,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8013052652158011130,
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
			id : 7653614334785021432,
			access_hash : 4810018964733837417,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 80,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'StLmH9g7Vhps2MJk',
					reason : '7p14bqIXAaigmPDJ',
					text : 'PFry04Nz2wMLG79E',
				),
			),
			bot_inline_placeholder : '5qivSw2bIBgx9foA',
			lang_code : 'y1P7bwQCtGA3glY6',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 88,
			color : $client->peerColor(
				color : 78,
				background_emoji_id : 5516987364821253771,
			),
			profile_color : $client->peerColor(
				color : 28,
				background_emoji_id : -7319677507430808098,
			),
			bot_active_users : 87,
			bot_verification_icon : 7869181190135053065,
			send_paid_messages_stars : 7182862828281962709,
		),
	),
);
```