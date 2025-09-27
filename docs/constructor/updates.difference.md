# updates.difference

**Description** : *Full list of occurred events*

**Layer** : 214

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
			id : 62,
			peer_id : $client->peerUser(
				user_id : 9057128497257218340,
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
			id : 48,
			from_id : $client->peerUser(
				user_id : -7684306372124184878,
			),
			from_boosts_applied : 6,
			peer_id : $client->peerUser(
				user_id : -7689654581222782604,
			),
			saved_peer_id : $client->peerUser(
				user_id : 5378994385666395532,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(...),
				from_name : 'rPkQ6zdeysHJCiFp',
				date : 96,
				channel_post : 86,
				post_author : 'QvfiGkST7qzpnElX',
				saved_from_peer : $client->peerUser(...),
				saved_from_msg_id : 28,
				saved_from_id : $client->peerUser(...),
				saved_from_name : 'mVzuLXqaxK2Tt4JD',
				saved_date : 39,
				psa_type : 'ZacYPuOzi2UXT6Wh',
			),
			via_bot_id : 5546519431270727917,
			via_business_bot_id : 2718110144400007547,
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 51,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 39,
				quote_text : 'BPnid4O6gmjsLZDQ',
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
				quote_offset : 36,
				todo_item_id : 32,
			),
			date : 88,
			message : '1RTUBDoieA8SJ64j',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 52,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 95,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 27,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 62,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 39,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 69,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 30,
					language : '0YzwZfsgP2cx89HR',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 45,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 5,
					user_id : -7635162417929221574,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 42,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 27,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 51,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 18,
					document_id : 2217305661832132871,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 53,
				),
			),
			views : 71,
			forwards : 33,
			replies : $client->messageReplies(
				comments : true,
				replies : 9,
				replies_pts : 33,
				recent_repliers : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				channel_id : 3696538128056327650,
				max_id : 2,
				read_max_id : 76,
			),
			edit_date : 11,
			post_author : '1wPift9NqD4OyoBL',
			grouped_id : 4615895587201389427,
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
					platform : 'MobHCPrTkNspXcWI',
					reason : 'PbZx46zh71euIg0J',
					text : 'oqHmpafWRVCA0eb8',
				),
			),
			ttl_period : 20,
			quick_reply_shortcut_id : 83,
			effect : -241192094903504219,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'NX3Qv4UFCsLARpt9',
				text : $client->textWithEntities(...),
				hash : 0,
			),
			report_delivery_until_date : 77,
			paid_message_stars : 6402908677587396845,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(...),
				schedule_date : 22,
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
			id : 4,
			from_id : $client->peerUser(
				user_id : 3139152656200463801,
			),
			peer_id : $client->peerUser(
				user_id : 721088792169836137,
			),
			saved_peer_id : $client->peerUser(
				user_id : -5427045952813812286,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 46,
				reply_to_peer_id : $client->peerUser(...),
				reply_from : $client->messageFwdHeader(...),
				reply_media : $client->messageMediaEmpty(...),
				reply_to_top_id : 73,
				quote_text : 'aKsQe67SME9bwRdH',
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
				quote_offset : 43,
				todo_item_id : 83,
			),
			date : 96,
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
			ttl_period : 61,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -9065767033201340241,
			chat_id : 48,
			date : 43,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : 400537011744630042,
			chat_id : 61,
			date : 19,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 100,
				peer_id : $client->peerUser(...),
			),
			pts : 4,
			pts_count : 30,
		),
		$client->updateMessageID(
			id : 17,
			random_id : -6448180127067541037,
		),
		$client->updateDeleteMessages(
			messages : array(60),
			pts : 12,
			pts_count : 47,
		),
		$client->updateUserTyping(
			user_id : 1288960684477131514,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 7847904577826089926,
			from_id : $client->peerUser(
				user_id : -5210606648973211472,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 4326112048806316139,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : -138673147320072252,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -5704305523486418858,
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
			date : 18,
			device : 'msqlGCATeIVb2Bd6',
			location : 'lUAGSer2WaZMYmv4',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 422363045619074311,
				chat_id : 82,
				date : 18,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 96,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 38,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 20,
			),
			date : 20,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 77,
			max_date : 37,
			date : 71,
		),
		$client->updateChatParticipantAdd(
			chat_id : 3522464830445551634,
			user_id : -4802204917996794783,
			inviter_id : 2199045566642532988,
			date : 71,
			version : 34,
		),
		$client->updateChatParticipantDelete(
			chat_id : 5974872239150141092,
			user_id : 1446985820282634217,
			version : 29,
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
					id : 81,
					ip_address : '127.0.0.1',
					port : 44,
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
				silent : true,
				mute_until : 91,
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
			inbox_date : 32,
			type : 'R9lrX2ekOap5CJPs',
			message : 'WkloK3AUSj60auei',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 94,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 61,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 98,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 77,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 64,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 54,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 21,
					language : 'L3lwZnySHqNvRbij',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 70,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 69,
					user_id : -67648303226188755,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 53,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 64,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 6,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 43,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 71,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 30,
					document_id : 3222503906578677577,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 62,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(8162252946439892296),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(5516407697193284769),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-7415459607040024773),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-7031020200044680982),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 487906021667858841,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 15,
			peer : $client->peerUser(
				user_id : -5082053689935637129,
			),
			max_id : 79,
			still_unread_count : 78,
			pts : 46,
			pts_count : 68,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 5762422562247972388,
			),
			max_id : 39,
			pts : 36,
			pts_count : 37,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -496096085399060495,
				url : 'https://docs.liveproto.dev',
			),
			pts : 13,
			pts_count : 67,
		),
		$client->updateReadMessagesContents(
			messages : array(50),
			pts : 87,
			pts_count : 36,
			date : 79,
		),
		$client->updateChannelTooLong(
			channel_id : -8088149208259111627,
			pts : 52,
		),
		$client->updateChannel(
			channel_id : -8914087868509262474,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 64,
				peer_id : $client->peerUser(...),
			),
			pts : 97,
			pts_count : 15,
		),
		$client->updateReadChannelInbox(
			folder_id : 90,
			channel_id : 5485292455442047372,
			max_id : 88,
			still_unread_count : 30,
			pts : 64,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -1506547275975720827,
			messages : array(12),
			pts : 50,
			pts_count : 15,
		),
		$client->updateChannelMessageViews(
			channel_id : -8329491025374660300,
			id : 51,
			views : 57,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -963698141409635955,
			user_id : 3106308442478262531,
			is_admin : false,
			version : 89,
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
			order : array(-8526630187038602853),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 8694684367686257980,
			user_id : 1592481710363681814,
			query : 'nwmxhpFDMc3CSrKu',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'WHrFNyhC6nt0DYk5',
		),
		$client->updateBotInlineSend(
			user_id : -3699393134432745614,
			query : 'k0Yn9Iy5umcJ7Eo6',
			geo : $client->geoPointEmpty(),
			id : 'K9JEux0NPivQUqwL',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 75,
				id : -5981398518853827831,
				access_hash : -6814953247193936854,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 64,
				peer_id : $client->peerUser(...),
			),
			pts : 96,
			pts_count : 54,
		),
		$client->updateBotCallbackQuery(
			query_id : 3541791842041067081,
			user_id : -3922520938904064591,
			peer : $client->peerUser(
				user_id : 4806876403046947130,
			),
			msg_id : 23,
			chat_instance : -5670193677623032890,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'CbwyBoJ8ARzUfS9L',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 42,
				peer_id : $client->peerUser(...),
			),
			pts : 71,
			pts_count : 14,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -3930226637644524470,
			user_id : -5627514721857734438,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 18,
				id : -1000691487321628336,
				access_hash : 2017211195207236036,
			),
			chat_instance : 5338586071054165800,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '7FEwHA1bzMyRndiW',
		),
		$client->updateReadChannelOutbox(
			channel_id : -6550542199936086838,
			max_id : 21,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 6226516818493717811,
			),
			top_msg_id : 45,
			saved_peer_id : $client->peerUser(
				user_id : 5969859022236619510,
			),
			draft : $client->draftMessageEmpty(
				date : 16,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 5389799906182680407,
			webpage : $client->webPageEmpty(
				id : 3558252921339781934,
				url : 'https://docs.liveproto.dev',
			),
			pts : 43,
			pts_count : 20,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 95,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 97,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 0,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'ZEIkF3RjLctYKArw',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 4556851971551293889,
			data : $client->dataJSON(
				data : 'whGDqPEx0pzU2mV5',
			),
			timeout : 41,
		),
		$client->updateBotShippingQuery(
			query_id : -8679113147635987709,
			user_id : -652352838126161909,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'FMjfpKrkwGioU0dH',
				street_line2 : 'Is5fprc4OZ0j7GbP',
				city : 's9lqPT74SugbDMfC',
				state : 'i5yuD7Lqpm31FUsh',
				country_iso2 : 'Xnr694ZIRbh8z5jx',
				post_code : 'cJ3p4s7zfyqwGA81',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 7981907589147134097,
			user_id : 1577912124730398422,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'LhBdzu0HEaRNxkXT',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'YpJ0U21box3RhafZ',
			currency : 'vIL6c1xtM9aqO4UH',
			total_amount : -4804214145697318948,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -4029367049320231907,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : '8aWgNM5J1FjEKnDm',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'ARJxj62ovOKBIGwV',
				from_version : 100,
				version : 29,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -4533067943373318610,
			top_msg_id : 52,
			saved_peer_id : $client->peerUser(
				user_id : 6248021696437313791,
			),
			messages : array(33),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -2050466766238217365,
			available_min_id : 35,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -6190585873080771416,
			),
		),
		$client->updateMessagePoll(
			poll_id : 4404708143087657011,
			poll : $client->poll(
				id : -4404785677067236072,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 78,
				close_date : 49,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 19,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'JoTQ8v9PdNMwkRlS',
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
				user_id : 8003783629613714963,
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
				until_date : 25,
			),
			version : 80,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 87,
				),
			),
			pts : 70,
			pts_count : 61,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -6607200689386477654,
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
				geo_distance : 26,
				request_chat_title : 'L6nQBwV3tvgmciS8',
				request_chat_date : 56,
				business_bot_id : -2057114158047763878,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -5386880060395061504,
				registration_month : 'vbBrCNVQH7h4jlJZ',
				phone_country : '+1234567890',
				name_change_date : 14,
				photo_change_date : 33,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 65,
					distance : 80,
				),
				$client->peerSelfLocated(
					expires : 61,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 87,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 7652225753072260903,
			),
			messages : array(79),
			sent_messages : array(11),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -7459370189457481996,
				access_hash : -454489981795370204,
				slug : '4s05gBXMnkJI7cYP',
				title : 'ZHsnwbGJhrMNyU1o',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'tmWKb0cqBfgzr3ZO',
				installs_count : 63,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -8371878113220869461,
			),
			msg_id : 81,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 9037111683376942094,
			peer : $client->peerUser(
				user_id : 1346661508871085933,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 13,
		),
		$client->updateDialogFilter(
			id : 41,
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
				id : 23,
				title : $client->textWithEntities(...),
				emoticon : '2unVGLhiKAPx1vq5',
				color : 35,
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
			order : array(38),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -4573723910230280181,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -1696445743512261324,
			id : 88,
			forwards : 56,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 8840605287190157296,
			top_msg_id : 10,
			read_max_id : 61,
			broadcast_id : 5686562562680650560,
			broadcast_post : 22,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -7543623364738486647,
			top_msg_id : 87,
			read_max_id : 14,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 6336085606197868566,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -1858215823370152353,
			top_msg_id : 99,
			from_id : $client->peerUser(
				user_id : -7716830571403979157,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -9201528322938254491,
			),
			messages : array(41),
			pts : 75,
			pts_count : 60,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 2691684941370616235,
			messages : array(44),
			pts : 83,
			pts_count : 0,
		),
		$client->updateChat(
			chat_id : -2282690730987290900,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -1510357889917989215,
				access_hash : -9108454637922341216,
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
					date : 76,
					active_date : 50,
					source : 40,
					volume : 64,
					about : 'ORNZmLrozqkcTQP4',
					raise_hand_rating : -1438979677631715632,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 45,
		),
		$client->updateGroupCall(
			chat_id : -4757211443584358870,
			call : $client->groupCallDiscarded(
				id : -8641154653467876712,
				access_hash : 8112023016534774575,
				duration : 37,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 4790000031458131812,
			),
			ttl_period : 4,
		),
		$client->updateChatParticipant(
			chat_id : 659070018790336622,
			date : 26,
			actor_id : -5746217656437160688,
			user_id : 2020145670326807819,
			prev_participant : $client->chatParticipant(
				user_id : 1993064865785752330,
				inviter_id : 342871269837726298,
				date : 8,
			),
			new_participant : $client->chatParticipant(
				user_id : -247036134959866492,
				inviter_id : -2726871110207950331,
				date : 44,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '1eJ48ifnHuRr95gm',
				admin_id : -333754244663441344,
				date : 40,
				start_date : 96,
				expire_date : 85,
				usage_limit : 50,
				usage : 76,
				requested : 90,
				subscription_expired : 65,
				title : 'hbHuMDAyt0sX1Wmk',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 85,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 7051581331040915451,
			date : 57,
			actor_id : 2213583288453839054,
			user_id : -7351412934858888705,
			prev_participant : $client->channelParticipant(
				user_id : -2693436070103658410,
				date : 58,
				subscription_until_date : 84,
			),
			new_participant : $client->channelParticipant(
				user_id : -7238183319855654141,
				date : 86,
				subscription_until_date : 46,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'xnsXtoYkRCm9uJDe',
				admin_id : -5636120980823260848,
				date : 35,
				start_date : 87,
				expire_date : 56,
				usage_limit : 63,
				usage : 94,
				requested : 35,
				subscription_expired : 79,
				title : 'mSg0H1UqRIMYsKVp',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 67,
		),
		$client->updateBotStopped(
			user_id : 2550385017588618709,
			date : 64,
			stopped : true,
			qts : 56,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'OhyAbBfFPZKl10XI',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -6040417455734820246,
			),
			bot_id : 613043374884828246,
			commands : array(
				$client->botCommand(
					command : 'onSmVblF7QR5OaqK',
					description : 'JTM9VmfGwELgaFXu',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 6490593393662051284,
			),
			requests_pending : 29,
			recent_requesters : array(3430889345590736318),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -246608894114922527,
			),
			date : 100,
			user_id : 8543432622374765275,
			about : 'lfnrcaiTeJAYbyHN',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'tu4mfWehd6EHJPgQ',
				admin_id : 1068901513286994811,
				date : 63,
				start_date : 17,
				expire_date : 60,
				usage_limit : 2,
				usage : 59,
				requested : 11,
				subscription_expired : 49,
				title : 'XWuObhVFevwBMsU9',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 6,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 585216443335183732,
			),
			msg_id : 33,
			top_msg_id : 96,
			saved_peer_id : $client->peerUser(
				user_id : 1667093063139721849,
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
			query_id : 2411228244130078336,
		),
		$client->updateBotMenuButton(
			bot_id : 4782522649477467869,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 2644554429490451173,
			),
			msg_id : 23,
			transcription_id : -4737123421102356258,
			text : 'ToGZnqXH79Vcg0fB',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -2084724091265463767,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 964530896218661903,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -5704750153184517448,
			),
			msg_id : 88,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 60,
					h : 80,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 50,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 1657827521077231352,
			topic_id : 15,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -6091267472619634804,
			order : array(21),
		),
		$client->updateUser(
			user_id : -4168839783935159975,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 6772589465203840006,
			),
			story : $client->storyItemDeleted(
				id : 83,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -8971353151842440902,
			),
			max_id : 43,
		),
		$client->updateStoryID(
			id : 3,
			random_id : -4996149296957993612,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 62,
				cooldown_until_date : 45,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 8591801543158648221,
			),
			story_id : 2,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 801885785257097793,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'L70OQ1wiCYlvAZrN',
				user_id : 7004108446859847920,
				giveaway_msg_id : 38,
				date : 31,
				expires : 84,
				used_gift_slug : 'kgF2qYSyWrC85sOQ',
				multiplier : 19,
				stars : 4119589920031077939,
			),
			qts : 16,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 4902342932461709047,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 1419705922171444079,
			),
			wallpaper : $client->wallPaper(
				id : -1525076334462352646,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -7318242014922178347,
				slug : 'FuqylbJ1sIzp3wHi',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -1077462648771264552,
			),
			msg_id : 51,
			date : 80,
			actor : $client->peerUser(
				user_id : 4535214678000556795,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'mdzI1EJTXwGFf4hH',
				),
				$client->reactionCustomEmoji(
					document_id : 8240653506129448740,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'X4rvEPZ59Ayq3T6B',
				),
				$client->reactionCustomEmoji(
					document_id : 1456467894943920205,
				),
				$client->reactionPaid(),
			),
			qts : 13,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 4573680894434751799,
			),
			msg_id : 95,
			date : 82,
			reactions : array(
				$client->reactionCount(
					chosen_order : 67,
					reaction : $client->reactionEmpty(...),
					count : 89,
				),
			),
			qts : 19,
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
					folder_id : 87,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : '5zKpTkEYDBc1xubq',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 100,
					shortcut : '4sr37mdg6uDpTRQO',
					top_message : 20,
					count : 86,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 8,
				shortcut : 'PT7mWkNJGn08Yr6p',
				top_message : 79,
				count : 98,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 31,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 26,
			messages : array(38),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'u4m96QLFoGU5fXRc',
				user_id : -4701147924808460762,
				dc_id : 60,
				date : 2,
				rights : $client->businessBotRights(...),
			),
			qts : 50,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'fC7HQMDqZ6sKPOdI',
			message : $client->messageEmpty(
				id : 36,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(...),
			),
			qts : 67,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'GC9IdNKJgEvlbWP7',
			message : $client->messageEmpty(
				id : 25,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 60,
				peer_id : $client->peerUser(...),
			),
			qts : 21,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : '74HNXG5cPCB3sDTR',
			peer : $client->peerUser(
				user_id : 2789670657445748163,
			),
			messages : array(9),
			qts : 24,
		),
		$client->updateNewStoryReaction(
			story_id : 52,
			peer : $client->peerUser(
				user_id : -8599653638147214894,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -4905235543611248449,
				nanos : 38,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -8267994798751787788,
			user_id : -5239540198028717794,
			connection_id : 'jZ6lIBsPYE27FLOq',
			message : $client->messageEmpty(
				id : 65,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 99,
				peer_id : $client->peerUser(...),
			),
			chat_instance : 3252812115430435741,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 3278036204161142403,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 56,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 3875409862320484445,
			payload : 'J2WfOtTkMFZhrD3w',
			qts : 78,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 76,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -8995898601970258482,
				access_hash : 8104260054458915221,
			),
			sub_chain_id : 88,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 26,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 8329070738000135930,
			saved_peer_id : $client->peerUser(
				user_id : 6130525190388193969,
			),
			read_max_id : 68,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -5312756460021700655,
			saved_peer_id : $client->peerUser(
				user_id : -5049772141587341892,
			),
			read_max_id : 91,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -1620272011958707937,
			saved_peer_id : $client->peerUser(
				user_id : -5356357102961583385,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 4340838772793598957,
			text : 'ORZVU72xQBNnX1pS',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -1435307363442615570,
			payload : 'lFM8Ao3IprN0dR7Z',
			until_date : 92,
			qts : 93,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8529976692767972924,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6063874993885395443,
			title : 'KnU4TSxHeXfLEvpr',
			photo : $client->chatPhotoEmpty(),
			participants_count : 3,
			date : 9,
			version : 32,
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
				until_date : 88,
			),
		),
		$client->chatForbidden(
			id : 4967638082700415237,
			title : '1qyRnh0IKbdpijUt',
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
			id : -1246295520191781138,
			access_hash : -2043927841495392035,
			title : 'rev39kPdocSu20m8',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TEBoJVcFsP5OUafA',
					reason : 'cjGzDi45tIn0lUyX',
					text : 'gUEmRaqOjIwvYhLJ',
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
				until_date : 8,
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
				until_date : 97,
			),
			participants_count : 69,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 9,
			color : $client->peerColor(
				color : 62,
				background_emoji_id : 7654699255906543910,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : -7061122006051900520,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 0,
			subscription_until_date : 87,
			bot_verification_icon : 130463509844813786,
			send_paid_messages_stars : 2731982628046793511,
			linked_monoforum_id : -4008148404696880729,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -166243765045617238,
			access_hash : -3342134834948629105,
			title : 'rszXmtgo6Gnq1Nab',
			until_date : 80,
		),
	),
	users : array(
		$client->userEmpty(
			id : 202586043912941724,
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
			id : 2928471527710425144,
			access_hash : 7884997283835335939,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 22,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HCot56mjUlzfLc4i',
					reason : 'mKTfMsHQD8LPBnX3',
					text : 'H8qZpIl15LbADnUj',
				),
			),
			bot_inline_placeholder : '1a7N450bJdvZUfEO',
			lang_code : '9VyEADBZ50jo1IUm',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 1,
			color : $client->peerColor(
				color : 94,
				background_emoji_id : 1141228912278529128,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : -6954971037905623523,
			),
			bot_active_users : 75,
			bot_verification_icon : -8888153538242348111,
			send_paid_messages_stars : 805674653084630594,
		),
	),
	state : $client->updates->state(
		pts : 20,
		qts : 97,
		date : 82,
		seq : 15,
		unread_count : 10,
	),
);
```