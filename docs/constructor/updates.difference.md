# updates.difference

**Description** : *Full list of occurred events*

**Layer** : 216

```tl
updates.difference#f49ca0 new_messages:Vector<Message> new_encrypted_messages:Vector<EncryptedMessage> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> state:updates.State = updates.Difference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | List of new messages |
| <mark>new_encrypted_messages</mark> | [`Vector<EncryptedMessage>`](type/EncryptedMessage) | List of new encrypted secret chat messages |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in events |
| <mark>state</mark> | [`updates.State`](type/updates.State) | Current state |

---

## Type

[updates.Difference](type/updates.Difference)

---

## Example

```php
$updatesDifference = $client->updates->difference(
	new_messages : array(
		$client->messageEmpty(
			id : 99,
			peer_id : $client->peerUser(
				user_id : 5038755377266713647,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 89,
			from_id : $client->peerUser(
				user_id : -265028620545632793,
			),
			from_boosts_applied : 2,
			peer_id : $client->peerUser(
				user_id : 7886025154836987870,
			),
			saved_peer_id : $client->peerUser(
				user_id : 3881857769578303155,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : '5EC0IY1LwlOe8FsB',
				date : 49,
				channel_post : 20,
				post_author : 'Tw6BnGqjvr0R8OZW',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 100,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'QdDOfwe1TB9KIcRk',
				saved_date : 84,
				psa_type : 'CToJOnKBHybDRGfE',
			),
			via_bot_id : -479221829687349965,
			via_business_bot_id : 1182577038448056318,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 73,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 66,
				quote_text : 'aGJkTe6im8xoZufN',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 6,
				todo_item_id : 49,
			),
			date : 81,
			message : 'kl4xWHz5X20hDwyf',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 67,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 99,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 78,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 91,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 53,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 51,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 68,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 22,
					language : 'Ltvq2V6oZK4IUJcG',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 79,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 58,
					user_id : -87194619442502029,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 62,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 49,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 39,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 67,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 18,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 100,
					document_id : -9099596262287716802,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 32,
				),
			),
			views : 92,
			forwards : 40,
			replies : $client->messageReplies(
				comments : true,
				replies : 66,
				replies_pts : 11,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 5353639183011546235,
				max_id : 4,
				read_max_id : 16,
			),
			edit_date : 58,
			post_author : 'f4OG69LeR5FoWNKT',
			grouped_id : 559807383792572849,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jmiBFq26HLKISeow',
					reason : 'RD8HyUMVfxwn0tcA',
					text : 'DVsaFO5qWeoPR6nt',
				),
			),
			ttl_period : 67,
			quick_reply_shortcut_id : 55,
			effect : -2926530293519506193,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'Ohewzsux5Cp9lVDq',
				text : $client->textWithEntities(...),
				hash : 0,
			),
			report_delivery_until_date : 88,
			paid_message_stars : -6401842786243161090,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 4,
			),
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 45,
			from_id : $client->peerUser(
				user_id : 3048476208392647897,
			),
			peer_id : $client->peerUser(
				user_id : 7429168283644253208,
			),
			saved_peer_id : $client->peerUser(
				user_id : 5107108261830875168,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 23,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 43,
				quote_text : 'Sv3nX0fUHbNw6VlY',
				quote_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
				quote_offset : 97,
				todo_item_id : 42,
			),
			date : 68,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
			ttl_period : 93,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -2571398050075002429,
			chat_id : 15,
			date : 8,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : 6193806828127913186,
			chat_id : 76,
			date : 50,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 54,
				peer_id : $client->peerUser(...),
			),
			pts : 93,
			pts_count : 19,
		),
		$client->updateMessageID(
			id : 28,
			random_id : 2944036046654016744,
		),
		$client->updateDeleteMessages(
			messages : array(7),
			pts : 39,
			pts_count : 25,
		),
		$client->updateUserTyping(
			user_id : 2147556879422167365,
			top_msg_id : 51,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -346218179113784330,
			from_id : $client->peerUser(
				user_id : -5177175903349804863,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 160069783732645781,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 4067037038749949727,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -4771584771995503040,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 92,
			device : 'qxiCF4TGRVJI1Q3t',
			location : '9x7TXSsWoMCdbHjY',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -4039701190156450535,
				chat_id : 48,
				date : 20,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 37,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 98,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 74,
			),
			date : 16,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 56,
			max_date : 31,
			date : 74,
		),
		$client->updateChatParticipantAdd(
			chat_id : 8438349866918936145,
			user_id : 6429537522328346715,
			inviter_id : -3753849044606838669,
			date : 65,
			version : 2,
		),
		$client->updateChatParticipantDelete(
			chat_id : -3267839736077058046,
			user_id : -2187552911702993309,
			version : 24,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 32,
					ip_address : '127.0.0.1',
					port : 18,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 61,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 27,
			type : 'zON8Ro9ft4WXxkVv',
			message : 'IOH9v0iTDh2LUyjR',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 32,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 72,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 47,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 86,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 31,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 69,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 48,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 54,
					language : 'V8IYeZcKGdLzRTmt',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 58,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 18,
					user_id : 7256977184187636991,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 33,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 65,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 92,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 25,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 15,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 25,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 78,
					document_id : -9205176330479493801,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 20,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(4557989239621951884),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-2008124238527978664),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(4865865844532091773),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-5790877214363080415),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -7999034528280744239,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 69,
			peer : $client->peerUser(
				user_id : -7495305422046735746,
			),
			top_msg_id : 76,
			max_id : 97,
			still_unread_count : 49,
			pts : 93,
			pts_count : 76,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 5500127049658657098,
			),
			max_id : 58,
			pts : 56,
			pts_count : 65,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 1501507501849262198,
				url : 'https://docs.liveproto.dev',
			),
			pts : 14,
			pts_count : 47,
		),
		$client->updateReadMessagesContents(
			messages : array(50),
			pts : 15,
			pts_count : 36,
			date : 97,
		),
		$client->updateChannelTooLong(
			channel_id : -3443855616833055471,
			pts : 36,
		),
		$client->updateChannel(
			channel_id : -3754938756351960000,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 8,
				peer_id : $client->peerUser(...),
			),
			pts : 63,
			pts_count : 85,
		),
		$client->updateReadChannelInbox(
			folder_id : 22,
			channel_id : 2151882627429939381,
			max_id : 46,
			still_unread_count : 59,
			pts : 67,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 2869160699225035508,
			messages : array(0),
			pts : 82,
			pts_count : 73,
		),
		$client->updateChannelMessageViews(
			channel_id : 7036557958461237197,
			id : 7,
			views : 96,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 3491799708517203012,
			user_id : 6729508525091617662,
			is_admin : false,
			version : 67,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(357959775940211220),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -4003245920688779429,
			user_id : -6830771497123582373,
			query : 'CsgITVDHyz4lABnK',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : '2gIXFKOGsu7AaRD9',
		),
		$client->updateBotInlineSend(
			user_id : 6557685361759470185,
			query : 'BwDFivKA7QrLjk6I',
			geo : $client->geoPointEmpty(),
			id : 'hdxTe4cqoGitULru',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 95,
				id : 5919877226986691520,
				access_hash : -924725579241055467,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 17,
				peer_id : $client->peerUser(...),
			),
			pts : 92,
			pts_count : 1,
		),
		$client->updateBotCallbackQuery(
			query_id : 6483014498783213180,
			user_id : 8494011389394723624,
			peer : $client->peerUser(
				user_id : 5312399920153740758,
			),
			msg_id : 89,
			chat_instance : -3540456816661784881,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'widepMXBmUJHkSnt',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 75,
				peer_id : $client->peerUser(...),
			),
			pts : 71,
			pts_count : 5,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 6220762775930943853,
			user_id : -4004455795296286524,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 89,
				id : 4854200641606527768,
				access_hash : -8687359222466000367,
			),
			chat_instance : -5761298146711984781,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'VDNkpWw1txe8uojY',
		),
		$client->updateReadChannelOutbox(
			channel_id : 2215688672943456138,
			max_id : 75,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -4265096662629497216,
			),
			top_msg_id : 73,
			saved_peer_id : $client->peerUser(
				user_id : -7157617343702813556,
			),
			draft : $client->draftMessageEmpty(
				date : 56,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -2119842222249964350,
			webpage : $client->webPageEmpty(
				id : -1442812989393918881,
				url : 'https://docs.liveproto.dev',
			),
			pts : 61,
			pts_count : 48,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 3,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 69,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 61,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'GHVfhkbZiBPt6yEp',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -564437717942044856,
			data : $client->dataJSON(
				data : '7P6IYHqEDUmczRjp',
			),
			timeout : 5,
		),
		$client->updateBotShippingQuery(
			query_id : 3032803526033504513,
			user_id : -5037955561915274551,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : '5pN0DnVHgYyhRTQA',
				street_line2 : '47Z6ULkFwsgl8Pxe',
				city : '5QM9PX0iednOtgcY',
				state : 'lDxbQnMEm1eBNZy2',
				country_iso2 : 'DO6VMnNlGjiqeI27',
				post_code : 'rjGxBWwX5KkU8b1R',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 7841368000187075901,
			user_id : 5580349239148869581,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'AxtJLvnbshom2YCS',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'umVUcnDINbpwJ12s',
			currency : 'Qt6mKdTzbslVoBU0',
			total_amount : -8572614476796025232,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -6954292811871708875,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'sJvPN7jaq2QCOcZo',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'XHe49SxTWFG7OoKa',
				from_version : 92,
				version : 55,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -5358540622630445072,
			top_msg_id : 65,
			saved_peer_id : $client->peerUser(
				user_id : 4893283381351266537,
			),
			messages : array(96),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 4995884763073648784,
			available_min_id : 76,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : 1268340862116771654,
			),
		),
		$client->updateMessagePoll(
			poll_id : 3967304054467468588,
			poll : $client->poll(
				id : 4072372862859413145,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 36,
				close_date : 56,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 82,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'A6wIxX2TZ9P4seWo',
				solution_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 2129162806814127865,
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
				until_date : 95,
			),
			version : 22,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 31,
				),
			),
			pts : 67,
			pts_count : 25,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 3500918258133743633,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 86,
				request_chat_title : '1fL2vzY8mbFRy9dB',
				request_chat_date : 38,
				business_bot_id : -1599979531407873270,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -1124134555253769935,
				registration_month : 'NfmIlwLudJDxEW18',
				phone_country : '+1234567890',
				name_change_date : 74,
				photo_change_date : 26,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 93,
					distance : 6,
				),
				$client->peerSelfLocated(
					expires : 64,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 40,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -8813215668586645981,
			),
			messages : array(81),
			sent_messages : array(93),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -8527365218643982900,
				access_hash : -3550463960681653378,
				slug : 'j67HM2AU3fQNnt04',
				title : 'PDzFnaJWpgeQRsrf',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'W17x826lZhv40JtN',
				installs_count : 19,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 2360992910847698198,
			),
			msg_id : 28,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -8423495990031942137,
			peer : $client->peerUser(
				user_id : 1905073814784368073,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 98,
		),
		$client->updateDialogFilter(
			id : 74,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 20,
				title : $client->textWithEntities(...),
				emoticon : 'g1arHQOibNtwWFYP',
				color : 52,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(11),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -8751335162566604169,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -4760915799151195766,
			id : 54,
			forwards : 29,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -507475416470378264,
			top_msg_id : 81,
			read_max_id : 16,
			broadcast_id : 8905190177439184242,
			broadcast_post : 4,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -8551037555619067208,
			top_msg_id : 11,
			read_max_id : 18,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -8886639403824198367,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -7272899529202214484,
			top_msg_id : 55,
			from_id : $client->peerUser(
				user_id : -2402654645159355136,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -4212502651625029625,
			),
			messages : array(17),
			pts : 87,
			pts_count : 45,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -219653373153480411,
			messages : array(99),
			pts : 20,
			pts_count : 82,
		),
		$client->updateChat(
			chat_id : -6274273839753997970,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -6631961282680992320,
				access_hash : -8177138572143545545,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(...),
					date : 31,
					active_date : 93,
					source : 47,
					volume : 25,
					about : 'fAT7mGWtijNdFuIv',
					raise_hand_rating : -254153345673026899,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 33,
		),
		$client->updateGroupCall(
			chat_id : -239575698383763995,
			call : $client->groupCallDiscarded(
				id : -7620074520940218144,
				access_hash : 4729104717783783310,
				duration : 29,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -1013058703118509243,
			),
			ttl_period : 87,
		),
		$client->updateChatParticipant(
			chat_id : -7265248126193085053,
			date : 7,
			actor_id : -2580201225637211718,
			user_id : 793345951100337584,
			prev_participant : $client->chatParticipant(
				user_id : -5584395299091395089,
				inviter_id : 6489263196291722155,
				date : 1,
			),
			new_participant : $client->chatParticipant(
				user_id : 7109798282445327510,
				inviter_id : 8189378951444318675,
				date : 69,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'c4fXJTPwshld3Q1p',
				admin_id : -5812205994004351925,
				date : 80,
				start_date : 18,
				expire_date : 39,
				usage_limit : 84,
				usage : 34,
				requested : 54,
				subscription_expired : 4,
				title : 'cgAo4GHTbvaYJPds',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 13,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 1434527634605220920,
			date : 25,
			actor_id : 2368103760073523095,
			user_id : 3222097487391720269,
			prev_participant : $client->channelParticipant(
				user_id : 3952547526268602986,
				date : 76,
				subscription_until_date : 42,
			),
			new_participant : $client->channelParticipant(
				user_id : 7466254882196360146,
				date : 66,
				subscription_until_date : 68,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'qDVbhiLMWf82IAgJ',
				admin_id : -8755759505550770477,
				date : 58,
				start_date : 8,
				expire_date : 12,
				usage_limit : 73,
				usage : 17,
				requested : 0,
				subscription_expired : 59,
				title : 'THq69bzQl8a3n4Ny',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 40,
		),
		$client->updateBotStopped(
			user_id : 8567490829619643205,
			date : 88,
			stopped : false,
			qts : 10,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'gt5plQZIe3LwO0rG',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 2801674271677418134,
			),
			bot_id : 7996300008353988802,
			commands : array(
				$client->botCommand(
					command : 'lo5Xq9Fk7K1VRwhP',
					description : 'osmgTlAVrbFu3XJj',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -7974958150899009453,
			),
			requests_pending : 100,
			recent_requesters : array(7263075462927967417),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -4569745955643290099,
			),
			date : 36,
			user_id : 2818684336816241215,
			about : 'wHeniUbMsLElV3Pk',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '8vBbWUC5103pTR7G',
				admin_id : 5784867462375231422,
				date : 77,
				start_date : 22,
				expire_date : 43,
				usage_limit : 46,
				usage : 60,
				requested : 44,
				subscription_expired : 74,
				title : 'NTm4YbLChOgR2QBp',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 92,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 260690635481118952,
			),
			msg_id : 93,
			top_msg_id : 63,
			saved_peer_id : $client->peerUser(
				user_id : -3612495356590761454,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -958747871817656405,
		),
		$client->updateBotMenuButton(
			bot_id : 1865697452163908228,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 3577880094202768131,
			),
			msg_id : 61,
			transcription_id : -3883496745838285502,
			text : 'fNoJ7lzYMngy8wKA',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -678223723748573427,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -2637921473845294850,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -6167911364400213270,
			),
			msg_id : 27,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 90,
					h : 28,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 13,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : -2564458560585442730,
			topic_id : 55,
		),
		$client->updateChannelPinnedTopics(
			channel_id : 7348474636563564089,
			order : array(64),
		),
		$client->updateUser(
			user_id : 6828805532072617312,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 1625250136979011133,
			),
			story : $client->storyItemDeleted(
				id : 58,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -4499460436277571974,
			),
			max_id : 26,
		),
		$client->updateStoryID(
			id : 28,
			random_id : -6036429627191705844,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 88,
				cooldown_until_date : 87,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -2228054544716707095,
			),
			story_id : 84,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -4808283068817125739,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'hqmEQwNCkB3JD8Vi',
				user_id : 6477724934155889383,
				giveaway_msg_id : 6,
				date : 20,
				expires : 66,
				used_gift_slug : '843q6mNQZCl5PRzH',
				multiplier : 13,
				stars : -6967578339944667552,
			),
			qts : 35,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 4768529057945876110,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -8856826706801217603,
			),
			wallpaper : $client->wallPaper(
				id : 7768762835342005905,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -7303949976284555216,
				slug : '8aAtUnwEGihuk7mD',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 983389533053587263,
			),
			msg_id : 69,
			date : 35,
			actor : $client->peerUser(
				user_id : -5156803986219507720,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'Vc2rm6vxHnkUP30y',
				),
				$client->reactionCustomEmoji(
					document_id : 997433103443467882,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'DWoAlLKUrJBk0w4y',
				),
				$client->reactionCustomEmoji(
					document_id : -7556171977895944377,
				),
				$client->reactionPaid(),
			),
			qts : 27,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -4588233749877927819,
			),
			msg_id : 82,
			date : 22,
			reactions : array(
				$client->reactionCount(
					chosen_order : 88,
					reaction : $client->reactionEmpty(...),
					count : 67,
				),
			),
			qts : 10,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 39,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'BMJxKLp2rieNIzkc',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 8,
					shortcut : 'yYFVMgrZShdj486n',
					top_message : 53,
					count : 23,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 14,
				shortcut : 'jDtnQcKZ5kAl6EBO',
				top_message : 82,
				count : 60,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 72,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 91,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 3,
			messages : array(84),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'HhmeVGua4zv80bsR',
				user_id : 5572578660530222462,
				dc_id : 84,
				date : 15,
				rights : $client->businessBotRights(...),
			),
			qts : 43,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'UNvDFnGWbIVAd9EJ',
			message : $client->messageEmpty(
				id : 15,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 7,
				peer_id : $client->peerUser(...),
			),
			qts : 58,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : '2FbfTt4ZYJiv0pM7',
			message : $client->messageEmpty(
				id : 28,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 0,
				peer_id : $client->peerUser(...),
			),
			qts : 82,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'mv37l6UaKIJpwbjX',
			peer : $client->peerUser(
				user_id : 4175005019872257151,
			),
			messages : array(26),
			qts : 68,
		),
		$client->updateNewStoryReaction(
			story_id : 5,
			peer : $client->peerUser(
				user_id : -2170110586166765501,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 8926976424151448966,
				nanos : 0,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -6800225771160123950,
			user_id : -5098803788492260858,
			connection_id : 'fTH8DjELWk5X2oS4',
			message : $client->messageEmpty(
				id : 25,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -7030636603946738985,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -4342854519202208950,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 71,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -1893132855320530349,
			payload : 'JPZRge4ufr1vtjDd',
			qts : 15,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 74,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -3985517777024391749,
				access_hash : 1551339855816273368,
			),
			sub_chain_id : 63,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 87,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 5392509931513748760,
			saved_peer_id : $client->peerUser(
				user_id : -5566098532696742245,
			),
			read_max_id : 62,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -3193551568804728016,
			saved_peer_id : $client->peerUser(
				user_id : -8043216099311913205,
			),
			read_max_id : 4,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -6453162425739945249,
			saved_peer_id : $client->peerUser(
				user_id : 4288456445241831983,
			),
		),
		$client->updatePinnedForumTopic(
			pinned : 97,
			peer : $client->peerUser(
				user_id : 8079741804048375474,
			),
			topic_id : 74,
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -7198389416521643394,
				access_hash : 1378726655994910112,
			),
			from_id : $client->peerUser(
				user_id : -9044599348657835853,
			),
			random_id : 6975059217675634160,
			message : $client->textWithEntities(
				text : 'clx2erC5EbgWmnPA',
				entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 894804594002489016,
			text : 'EQl8crSb9OKjUANu',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -7744880794332020088,
			payload : 'YoHmpdPSTzFJGvfZ',
			until_date : 98,
			qts : 43,
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -2454460476886190185,
				access_hash : -8256314908896429409,
			),
			from_id : $client->peerUser(
				user_id : -8394031964747675547,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -6010182033576733232,
			),
			order : array(77),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -8779173056096527428,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6873325760460546019,
			title : '9iXTGsFYlLJbSwzD',
			photo : $client->chatPhotoEmpty(),
			participants_count : 58,
			date : 35,
			version : 28,
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
				until_date : 72,
			),
		),
		$client->chatForbidden(
			id : -2930767180298240073,
			title : '9y6aJVfio2k3zlKY',
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
			id : -1317674964160525178,
			access_hash : 6468528074514092974,
			title : 'aKnZp7O41P0jLrCv',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 85,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8LCSPu5vlgjhJOD3',
					reason : 'xDp1YOyuES0olNzj',
					text : 'KNM6J8vfmdlwnPHc',
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
				until_date : 38,
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
				until_date : 13,
			),
			participants_count : 39,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 1,
			color : $client->peerColor(
				color : 70,
				background_emoji_id : -245090629540626749,
			),
			profile_color : $client->peerColor(
				color : 91,
				background_emoji_id : 8936397040950075947,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 21,
			subscription_until_date : 76,
			bot_verification_icon : -2002140852058415068,
			send_paid_messages_stars : 2482218018438513193,
			linked_monoforum_id : 3065867689787213256,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 12358430762086037,
			access_hash : -632350826731159748,
			title : 'beBYKa1F9Zog8rEJ',
			until_date : 35,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4306494659536254794,
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
			id : 8479951885226278210,
			access_hash : -2183552419091422751,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jozgd5F7VTQqrsPW',
					reason : 'sxn4ICDH7Xk3VmEj',
					text : 'SZEl6VbeQCiI2vnx',
				),
			),
			bot_inline_placeholder : 'dr1cPaEJztSjw56p',
			lang_code : '3iHJ58vBdpLqMlIF',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 51,
			color : $client->peerColor(
				color : 35,
				background_emoji_id : 3967988287408431993,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : 4959648409542309247,
			),
			bot_active_users : 37,
			bot_verification_icon : -4444971026712007236,
			send_paid_messages_stars : -2723192978838082046,
		),
	),
	state : $client->updates->state(
		pts : 26,
		qts : 85,
		date : 2,
		seq : 49,
		unread_count : 70,
	),
);
```