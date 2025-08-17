# chatlists.chatlistUpdates

**Description** : *Updated information about a chat folder deep link »*

**Layer** : 211

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
			user_id : -3423721180705970906,
		),
		$client->peerChat(
			chat_id : -470048061434678593,
		),
		$client->peerChannel(
			channel_id : -5560847695302873208,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -4572966138959234710,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6488958253000572076,
			title : '2U0eg5j93WYFwu8p',
			photo : $client->chatPhotoEmpty(),
			participants_count : 31,
			date : 91,
			version : 42,
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
				until_date : 46,
			),
		),
		$client->chatForbidden(
			id : -6085886577047543551,
			title : 'aR1eZguVzi3dOXMG',
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
			id : -859323457119794166,
			access_hash : -7897958555908454885,
			title : 'A2bpZKUkiMBl4Woa',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VYXES5TuCIwtvfMW',
					reason : 'K0sSiYQUgHzJwNeF',
					text : 'Wug30Q92JVcFEOMf',
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
				until_date : 25,
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
				until_date : 15,
			),
			participants_count : 21,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 17,
			color : $client->peerColor(
				color : 52,
				background_emoji_id : -5195605406919251901,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : -1839455105245240760,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 22,
			subscription_until_date : 100,
			bot_verification_icon : 3051725286306098123,
			send_paid_messages_stars : -6301226219904160956,
			linked_monoforum_id : -183827033805928755,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6440428664259172696,
			access_hash : 440478222595695518,
			title : 'AoeqBc3Tl4aVHK5k',
			until_date : 1,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3295198546790112343,
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
			id : -2016210700154363857,
			access_hash : -9147880211971289499,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TKADjiRHq4uC1ocX',
					reason : 'xCe7DF82B65cRAjU',
					text : '6r3xpN0aQ4DiSmwB',
				),
			),
			bot_inline_placeholder : 'lscS62wB3VqEIGuL',
			lang_code : 'JE7HBjfrn5WCy9Da',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 10,
			color : $client->peerColor(
				color : 45,
				background_emoji_id : 4570336299975639224,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : 7229780383631501377,
			),
			bot_active_users : 59,
			bot_verification_icon : 3978185667713091581,
			send_paid_messages_stars : -3145654108683164276,
		),
	),
);
```